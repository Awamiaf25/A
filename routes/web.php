<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductsController::class, 'getProduct']);

Route::get('/myproducts', [ProductsController::class, 'myProduct']) ->name('myproduct');

Route::get('/callus', [ProductsController::class, 'callUs']) ->name('callus');

Route::get('/aboutus', [ProductsController::class, 'aboutUs']) ->name('aboutus');