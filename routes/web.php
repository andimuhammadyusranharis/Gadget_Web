<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.home');
})->name('home');
Route::get('/store', function () {
    return view('landing.store');
})->name('store');
Route::get('/product', function () {
    return view('landing.product');
})->name('product');
Route::get('/checkout', function () {
    return view('landing.checkout');
})->name('checkout');
Route::get('/blank', function () {
    return view('landing.blank');
})->name('blank');

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
