<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function home(): View
    {
        return view('landing.home');
    }

    public function store(): View
    {
        $products = Product::with('category')->latest()->get();

        return view('landing.store', compact('products'));
    }

    public function product(): View
    {
        return view('landing.product');
    }

    public function checkout(): View
    {
        return view('landing.checkout');
    }

    public function blank(): View
    {
        return view('landing.blank');
    }
}
