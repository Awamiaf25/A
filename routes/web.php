<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::post('/addprod', [ProductsController::class, 'create'])->name('prod_create');

Route::get('/deleteprod/{id}', [ProductsController::class, 'delete'])->name('prod_delete');

Route::get('/editprod/{id}', [ProductsController::class, 'edit'])->name('prod_edit');

Route::post('/updateprod', [ProductsController::class, 'update'])->name('prod_update');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

Route::post('/addcat', [CategoriesController::class, 'create'])->name('cat_create');

Route::get('/deletecat/{id}', [CategoriesController::class, 'delete'])->name('cat_delete');

Route::get('/editcat/{id}', [CategoriesController::class, 'edit'])->name('cat_edit');

Route::post('/updatecat', [CategoriesController::class, 'update'])->name('cat_update');
