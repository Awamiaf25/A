<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ShoppingController;

Auth::routes();

Route::prefix('Shopping')->group(function(){

    Route::get('/', [ShoppingController::class, 'get_cat'])->name('get_cat');
    Route::get('/list/{id}', [ShoppingController::class, 'list'])->name('list');
    Route::get('/details/{id}',[ShoppingController::class, 'details'])->name('details');
    Route::get('/cart',[ShoppingController::class, 'cart'])->name('cart');
    Route::get('/checkout',[ShoppingController::class, 'checkout'])->name('checkout');
    Route::post('/pay',[ShoppingController::class, 'pay'])->name('pay');

});

Route::prefix('dashboard')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

    Route::prefix('categories')->group(function(){
        Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
        Route::post('/addcat', [CategoriesController::class, 'create'])->name('cat_create');
        Route::get('/deletecat/{id}', [CategoriesController::class, 'delete'])->name('cat_delete');
        Route::get('/editcat/{id}', [CategoriesController::class, 'edit'])->name('cat_edit');
        Route::post('/updatecat', [CategoriesController::class, 'update'])->name('cat_update');
    });

    Route::prefix('products')->group(function(){
        Route::get('/products', [ProductsController::class, 'index'])->name('products');
        Route::post('/addprod', [ProductsController::class, 'create'])->name('prod_create');
        Route::get('/deleteprod/{id}', [ProductsController::class, 'delete'])->name('prod_delete');
        Route::get('/editprod/{id}', [ProductsController::class, 'edit'])->name('prod_edit');
        Route::post('/updateprod', [ProductsController::class, 'update'])->name('prod_update');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/callus', [App\Http\Controllers\HomeController::class, 'callUs'])->name('callUs');

Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');

Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
