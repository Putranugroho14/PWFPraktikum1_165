<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // Product Page
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store')->middleware('can:manage-product');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('can:manage-product');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});
