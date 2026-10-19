<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function home(): View
    {
        $newProducts = Product::with('category')->latest()->take(8)->get();

        return view('landing.home', compact('newProducts'));
    }

    public function store(): View
    {
        $products = Product::with('category')->latest()->get();

        return view('landing.store', compact('products'));
    }

    public function product(Product $product): View
    {
        $relatedProducts = Product::with('category')
            ->where('category_id', $product->category_id)
            ->whereKeyNot($product->id)
            ->take(4)
            ->get();

        return view('landing.product', compact('product', 'relatedProducts'));
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
