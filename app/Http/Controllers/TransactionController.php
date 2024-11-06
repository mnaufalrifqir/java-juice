<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Notification;
use Midtrans\Snap;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::orderBy('id')->paginate(10);
        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    /**
     * Display the order page.
     */
    public function order()
    {
        $transactions = Transaction::where('user_id', auth()->id())->orderByDesc('created_at')->paginate(10);
        return view('front.orders', compact('transactions'));
    }

    /**
     * Display the checkout page.
     */
    public function checkout()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $provinces = $this->getProvinces();

        $totalAmount = 0;
        $totalWeight = 0;

        foreach ($cartItems as $item) {
            $itemAmount = $item->product->price * $item->quantity;
            $totalAmount += $itemAmount;
            $totalWeight += $item->product->weight * $item->quantity;
        }

        return view('front.checkout', compact('cartItems', 'totalAmount', 'totalWeight', 'provinces'));
    }

    private function getProvinces()
    {
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->get(env('RAJAONGKIR_BASE_URL') . '/province');

        if ($response->successful()) {
            return $response->json()['rajaongkir']['results'];
        }

        return [];
    }

    public function getCities($provinceId)
    {
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->get(env('RAJAONGKIR_BASE_URL') . "/city", [
                    'province' => $provinceId
                ]);

        return $response->successful() ? response()->json($response->json()['rajaongkir']['results']) : response()->json([]);
    }

    public function getShippingCost(Request $request)
    {
        $response = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->post(env('RAJAONGKIR_BASE_URL') . '/cost', [
                    'origin' => $request->origin,
                    'destination' => $request->destination,
                    'weight' => $request->weight,
                    'courier' => $request->courier,
                ]);

        return $response->successful() ? response()->json($response->json()['rajaongkir']['results']['0']['costs']) : response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function payment(StoreTransactionRequest $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        $validated = $request->validated();
        $weight = 0;
        $subtotal = 0;
        $total = 0;
        $paymentUrl = '';
        $snapToken = '';

        DB::transaction(function () use ($validated, &$weight, &$subtotal, &$total, &$paymentUrl, &$snapToken) {
            $transaction = Transaction::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'street_address' => $validated['street_address'],
                'province' => explode(':', $validated['province'])[1],
                'city' => explode(':', $validated['city'])[1],
                'postal_code' => $validated['postal_code'],
                'phone_number' => $validated['phone_number'],
                'email' => $validated['email'],
                'courier' => explode(':', $validated['courier'])[0] . ' - ' . explode(':', $validated['courier'])[1],
                'weight' => 0,
                'shipping_cost' => $validated['shipping_cost'],
                'subtotal' => 0,
                'total' => 0,
                'payment_status' => 'pending',
                'shipping_status' => 'pending',
                'payment_url' => '',
                'snap_token' => '',
                'order_id' => uniqid(),
                'user_id' => auth()->id(),
            ]);

            $cartItems = Cart::where('user_id', auth()->id())->get();
            foreach ($cartItems as $item) {
                $transaction->detailsTransaction()->create([
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'total_price' => $item->product->price * $item->quantity,
                ]);
                $weight += $item->product->weight * $item->quantity;
                $subtotal += $item->product->price * $item->quantity;
                $item->delete();
            }

            $total = $validated['shipping_cost'] + $subtotal;

            $transaction->update([
                'weight' => $weight,
                'subtotal' => $subtotal,
                'total' => $total,
            ]);

            $params = [
                'transaction_details' => [
                    'order_id' => $transaction->order_id,
                    'gross_amount' => $transaction->total,
                ],
                'customer_details' => [
                    'first_name' => $transaction->first_name,
                    'last_name' => $transaction->last_name,
                    'email' => $transaction->email,
                    'phone' => $transaction->phone_number,
                    'shipping_address' => [
                        'address' => $transaction->street_address,
                        'city' => $transaction->city,
                        'postal_code' => $transaction->postal_code,
                        'phone' => $transaction->phone_number,
                        'country_code' => 'IDN',
                    ],
                ],
            ];

            $snapResponse = Snap::createTransaction($params);
            $paymentUrl = $snapResponse->redirect_url;
            $snapToken = $snapResponse->token;

            $transaction->update([
                'payment_url' => $paymentUrl,
                'snap_token' => $snapToken,
            ]);
        });

        return response()->json([
            'payment_url' => $paymentUrl,
            'snap_token' => $snapToken,
        ]);
    }

    // Handle notification from Midtrans
    public function notificationHandler(Request $request)
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');

        // Log the incoming request payload for debugging
        \Log::info('Midtrans Notification Payload:', $request->all());

        try {
            $notification = new Notification();
        } catch (\Exception $e) {
            \Log::error('Midtrans Notification Error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Invalid notification: ' . $e->getMessage(),
            ], 400);
        }

        $transactionStatus = $notification->transaction_status;
        $paymentType = $notification->payment_type;
        $fraudStatus = $notification->fraud_status;
        $orderId = $notification->order_id;

        $transaction = Transaction::where('order_id', $orderId)->first();

        if (!$transaction) {
            \Log::error("Order ID $orderId not found in transactions");

            return response()->json([
                'status' => 'error',
                'message' => 'Order ID not found',
            ], 404);
        }

        // Log the transaction status for debugging
        \Log::info("Transaction Status: $transactionStatus, Payment Type: $paymentType, Fraud Status: $fraudStatus, Order ID: $orderId");

        if ($transactionStatus == 'capture') {
            if ($paymentType == 'credit_card') {
                if ($fraudStatus == 'challenge') {
                    $transaction->update(['payment_status' => 'pending']);
                } else {
                    $transaction->update(['payment_status' => 'success']);
                }
            }
        } elseif ($transactionStatus == 'settlement') {
            $transaction->update(['payment_status' => 'success']);
        } elseif ($transactionStatus == 'pending') {
            $transaction->update(['payment_status' => 'pending']);
        } elseif ($transactionStatus == 'deny') {
            $transaction->update(['payment_status' => 'failed']);
        } elseif ($transactionStatus == 'expire') {
            $transaction->update(['payment_status' => 'expired']);
        } elseif ($transactionStatus == 'cancel') {
            $transaction->update(['payment_status' => 'failed']);
        }

        \Log::info("Notification handled successfully for Order ID: $orderId");

        return response()->json([
            'status' => 'success',
            'message' => 'Notification handled successfully',
        ]);
    }

}