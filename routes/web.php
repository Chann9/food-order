<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('customer.home');
});

/*
|--------------------------------------------------------------------------
| CUSTOMER PAGE
|--------------------------------------------------------------------------
*/

Route::get('/menu-page', function () {
    return view('customer.menu');
});

Route::get('/login-page', function () {
    return view('auth.login');
})->name('login');

Route::get('/resto', function () {
    return view('customer.resto');
});

Route::get('/cart', function () {
    return view('customer.cart');
});

Route::get('/success', function () {
    return view('customer.success');
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

Route::get('/tracking', function () {
    return view('customer.tracking');
});

Route::get('/history', function () {
    return view('customer.history');
});

/*
|--------------------------------------------------------------------------
| CRUD MENU
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::resource('menu', MenuController::class);

});

Route::get('/call-center', function () {
    return view('customer.callcenter');
});
/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';