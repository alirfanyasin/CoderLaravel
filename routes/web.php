<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function () {
//     return view('dashboard');
// });

Route::get('/halo', [DashboardController::class, 'index'])->middleware(AuthLogin::class);
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/', [ProductController::class, 'index']);

Route::resource('products', ProductController::class);
