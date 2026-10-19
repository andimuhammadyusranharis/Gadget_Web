<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing Pages
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/store', [LandingController::class, 'store'])->name('store');
Route::get('/product/{product:slug}', [LandingController::class, 'product'])->name('product');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');
Route::get('/blank', [LandingController::class, 'blank'])->name('blank');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('product', ProductController::class)->except('show');
    Route::resource('category', CategoryController::class)->except('create', 'show');
    Route::get('/order', function () {
        return view('admin.order');
    })->name('order');
});
