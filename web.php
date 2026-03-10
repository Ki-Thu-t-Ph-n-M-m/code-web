<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return redirect('/admin/products');
});

Route::prefix('admin')->group(function () {

    Route::get('/products', [ProductController::class,'index'])->name('admin.products.index');

    Route::get('/products/create', [ProductController::class,'create'])->name('admin.products.create');

    Route::post('/products', [ProductController::class,'store'])->name('admin.products.store');

    Route::get('/products/{id}/edit', [ProductController::class,'edit'])->name('admin.products.edit');

    Route::put('/products/{id}', [ProductController::class,'update'])->name('admin.products.update');

    Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('admin.products.destroy');

});