<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }

    public function products()
    {
        return view('front.products');
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
}