<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Http;
use Midtrans\Snap;
use Midtrans\Notification;
use Midtrans\Config;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = config('midtrans.is_sanitized');
        Config::$is3ds = config('midtrans.is_3ds');
    }
    
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
        return view('front.order');
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
        return DB::transaction(function () use ($request) {
            $validated = $request->validated();
            
            $transaction = Transaction::create([
                'first_name' => $validated['firstName'],
                'last_name' => $validated['lastName'],
                'street' => $validated['streetAddress'],
                'province' => $validated['province'],
                'city' => $validated['city'],
                'postal_code' => $validated['postalCode'],
                'phone_number' => $validated['phoneNumber'],
                'email' => $validated['email'],
                'courier' => $validated['courier'],
                'weight' => $validated['weight'],
                'shipping_cost' => $validated['shippingCost'],
                'subtotal' => $validated['subtotal'],
                'total' => $validated['total'],
                'payment_status' => 'pending',
                'shipping_status' => 'pending',
                'payment_url' => '',
                'user_id' => auth()->id(),
            ]);

            $cartItems = Cart::where('user_id', auth()->id())->get();
            foreach ($cartItems as $item) {
                $transaction->detailsTransaction()->create([
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'total_price' => $item->product->price * $item->quantity,
                ]);
                $item->delete();
            }

            $payload = [
                'transaction_details' => [
                    'order_id' => $transaction->id,
                    'gross_amount' => $transaction->total,
                ],
                'customer_details' => [
                    'first_name' => $transaction->first_name,
                    'last_name' => $transaction->last_name,
                    'email' => $transaction->email,
                    'phone' => $transaction->phone_number,
                    'shipping_address' => [
                        'address' => $transaction->street,
                        'city' => $transaction->city,
                        'postal_code' => $transaction->postal_code,
                        'phone' => $transaction->phone_number,
                        'country_code' => 'IDN',
                    ],
                ],
            ];

            $snapToken = Snap::getSnapToken($payload);
            $transaction->payment_url = $snapToken;
            $transaction->save();

            return response()->json(['snap_token' => $snapToken]);
        });
    }


    public function notificationHandler(Request $request)
    {
        $notification = new Notification();
        $transaction = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $notification->order_id;

        if ($transaction == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->setPending();
                } else {
                    $transaction->setSuccess();
                }
            }
        } else if ($transaction == 'settlement') {
            $transaction->setSuccess();
        } else if ($transaction == 'pending') {
            $transaction->setPending();
        } else if ($transaction == 'deny') {
            $transaction->setFailed();
        } else if ($transaction == 'expire') {
            $transaction->setExpired();
        } else if ($transaction == 'cancel') {
            $transaction->setFailed();
        }
    }
}