<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = auth()->user()->carts()->with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->product->current_price * $item->quantity);
        return view('front.cart', compact('cartItems', 'total'));
    }

    public function addToCart(StoreCartRequest $request)
    {
        $isFailed = false;
        DB::transaction(function () use ($request, &$isFailed) {
            $validated = $request->validated();
            $user = auth()->user();
            $cartItem = $user->carts()->where('product_id', $validated['product_id'])->first();
            $product = Product::findOrFail($validated['product_id']);

            if ($cartItem) {
                if ($cartItem->quantity + $validated['quantity'] > $product->stock) {
                    $isFailed = true;
                    return;
                }
                $cartItem->quantity += $validated['quantity'];
                $cartItem->save();
            } else {
                if ($validated['quantity'] > $product->stock) {
                    $isFailed = true;
                    return;
                }
                $user->carts()->create([
                    'product_id' => $validated['product_id'],
                    'quantity' => $validated['quantity'],
                ]);
            }
        });

        if ($isFailed) {
            return redirect()->back()->with('error', 'Stok tidak mencukupi.');
        } else {
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
        }
    }

    public function updateQuantity(Request $request, $cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        if ($cartItem->user_id != auth()->id()) {
            return redirect()->back()->withErrors('Aksi tidak diizinkan.');
        }

        $quantity = $request->input('quantity');

        if ($cartItem->product->stock < $quantity) {
            $quantity = $cartItem->product->stock;
            return redirect()->back()->with('error', 'Stok tidak mencukupi.');
        }

        if ($quantity > 0) {
            $cartItem->update(['quantity' => $quantity]);
        } else {
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Keranjang diperbarui.');
    }

    public function removeFromCart($cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        if ($cartItem->user_id != auth()->id()) {
            return redirect()->back()->withErrors('Aksi tidak diizinkan.');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Keranjang diperbarui.');
    }
}