<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        return view('front.cart', compact('cartItems', 'total'));
    }

    public function addToCart(StoreCartRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $user = auth()->user();
            $cartItem = $user->carts()->where('product_id', $validated['product_id'])->first();

            if ($cartItem) {
                $cartItem->quantity += $validated['quantity'];
                $cartItem->save();
            } else {
                $user->carts()->create([
                    'product_id' => $validated['product_id'],
                    'quantity' => $validated['quantity'],
                ]);
            }
        });

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function updateQuantity(Request $request, $cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        if ($cartItem->user_id != auth()->id()) {
            return redirect()->back()->withErrors('Unauthorized action.');
        }

        // Update kuantitas, sesuai permintaan pengguna
        $quantity = $request->input('quantity');
        if ($quantity > 0) {
            $cartItem->update(['quantity' => $quantity]);
        } else {
            $cartItem->delete();
        }

        return redirect()->route('cart.index');
    }

    // Fungsi untuk menghapus produk dari keranjang
    public function removeFromCart($cartId)
    {
        $cartItem = Cart::findOrFail($cartId);

        if ($cartItem->user_id != auth()->id()) {
            return redirect()->back()->withErrors('Unauthorized action.');
        }

        $cartItem->delete();

        return redirect()->route('cart.index');
    }
}