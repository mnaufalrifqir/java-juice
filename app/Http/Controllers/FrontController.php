<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }

    public function products()
    {
        $products = Product::orderByDesc('created_at')->paginate(1);
        return view('front.products', compact('products'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function team()
    {
        return view('front.team');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function details(Product $product)
    {
        return view('front.details', compact('product'));
    }

    public function checkout()
    {
        return view('front.checkout');
    }
}