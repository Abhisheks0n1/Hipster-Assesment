<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\RegisterController as AdminRegisterController;
use App\Http\Controllers\Customer\Auth\LoginController as CustomerLoginController;
use App\Http\Controllers\Customer\Auth\RegisterController as CustomerRegisterController;
use App\Http\Controllers\Admin\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('register', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register.form');
    Route::post('register', [AdminRegisterController::class, 'register'])->name('admin.register');
});

Route::prefix('customer')->group(function () {
    Route::get('login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login.form');
    Route::post('login', [CustomerLoginController::class, 'login'])->name('customer.login');
    Route::post('logout', [CustomerLoginController::class, 'logout'])->name('customer.logout');
    Route::get('register', [CustomerRegisterController::class, 'showRegisterForm'])->name('customer.register.form');
    Route::post('register', [CustomerRegisterController::class, 'register'])->name('customer.register');
});


Route::middleware('admin.auth')->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('products', ProductController::class);
    Route::post('products/import', [ProductController::class, 'import'])->name('products.import');
});

Route::middleware('customer.auth')->prefix('customer')->group(function () {
    Route::get('dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');

});