<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing Pages
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/store', [LandingController::class, 'store'])->name('store');
Route::get('/product/{product:slug}', [LandingController::class, 'product'])->name('product');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');
Route::get('/blank', [LandingController::class, 'blank'])->name('blank');

// Admin
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/product', function () {
    return view('admin.product');
})->name('admin.product');
Route::get('/admin/category', function () {
    return view('admin.category');
})->name('admin.category');
Route::get('/admin/order', function () {
    return view('admin.order');
})->name('admin.order');
