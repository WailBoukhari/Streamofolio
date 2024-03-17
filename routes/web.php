<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/affiliates', [MainController::class, 'affiliates'])->name('affiliates');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/single-product/{id}', [MainController::class, 'singleProduct'])->name('single-product');
Route::get('/stream', [MainController::class, 'stream'])->name('stream');
Route::get('/account-billing', [MainController::class, 'accountBilling'])->name('account-billing');
Route::get('/account-info', [MainController::class, 'accountInfo'])->name('account-info');
Route::get('/account-orders', [MainController::class, 'accountSrders'])->name('account-orders');
Route::get('/account-shipping', [MainController::class, 'accountShipping'])->name('account-shipping');
Route::get('/account', [MainController::class, 'account'])->name('account');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
Route::get('/donate', [MainController::class, 'donate'])->name('donate');


Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
Route::post('/store-review', [ReviewController::class, 'store'])->name('store.review');
