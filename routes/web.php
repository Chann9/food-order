<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.customer-login');
});

Route::get('/home', function () {
    return view('customer.home');
})->name('pilih-resto');

Route::get('/pilih-resto', function () {
    return view('customer.resto');
})->name('pilih-resto');


Route::get('/call-center', function () {
    return view('customer.calllcenter');
});

Route::get('/resto', function () {
    return view('customer.resto');
});

Route::get('/menu-page', function () {
    return view('customer.menu');
});

Route::get('/cart', function () {
    return view('customer.cart');
});

Route::get('/success', function () {
    return view('customer.success');
});

Route::get('/tracking', function () {
    return view('customer.tracking');
});

Route::get('/qris', function () {
    return view('customer.qris');
});

Route::get('/payment-success', function () {
    return view('customer.payment-success');
});

Route::get('/payment-failed', function () {
    return view('customer.payment-failed'); 
});

Route::get('/history', function () {
    return view('customer.history');
});