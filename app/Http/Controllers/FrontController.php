<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\HeroSection;
use App\Models\Partners;
use App\Models\TestimonialDetails;
use App\Models\Testimonial;
use App\Models\CompanyStatistic;

class FrontController extends Controller
{
    //
    public function index()
    {
        $hero_sections = HeroSection::orderByDesc('isPrimary')->orderBy('id')->limit(5)->get();
        $best_sellers = Product::orderByDesc('sold')->limit(5)->get();
        $new_products = Product::orderByDesc('created_at')->limit(5)->get();
        $sale_products = Product::where('discount', '>', 0)->get();
        $partners = Partners::all();
        $testimonials = Testimonial::orderByDesc('created_at')->limit(10)->get();
        $statistics = CompanyStatistic::all();
        return view('front.index', compact('hero_sections', 'best_sellers', 'new_products', 'sale_products', 'partners', 'testimonials', 'statistics'));
    }

    public function products()
    {
        $products = Product::orderByDesc('created_at')->paginate(4);
        return view('front.products', compact('products'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function details(Product $product)
    {
        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();
        $testimonials_details = TestimonialDetails::where('product_id', $product->id)->get();
        $average_rating = $testimonials_details->avg('rating');
        return view('front.details', compact('product', 'testimonials_details', 'related_products', 'average_rating'));
    }

    public function checkout()
    {
        return view('front.checkout');
    }

    public function success()
    {
        return view('front.success');
    }
}