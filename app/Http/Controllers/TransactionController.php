<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}