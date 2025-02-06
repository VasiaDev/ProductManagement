<?php

use App\Http\Controllers\Product\DeleteController;
use App\Http\Controllers\Product\EditController;
use App\Http\Controllers\Product\IndexController;
use App\Http\Controllers\Product\CreateController;
use App\Http\Controllers\Product\ShowController;
use App\Http\Controllers\Product\StoreController;
use App\Http\Controllers\Product\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/products');
});


Route::group(['namespace' => 'App\Http\Controllers\Product', 'prefix' => 'products'], function () {
    Route::get('/', IndexController::class)->name('product.index');
    Route::get('/create', CreateController::class)->name('product.create');
    Route::post('/', StoreController::class)->name('product.store');
    Route::get('/{product}', ShowController::class)->name('product.show');
    Route::get('/{product}/edit', EditController::class)->name('product.edit');
    Route::patch('/{product}',UpdateController::class)->name('product.update');
    Route::delete('/{product}', DeleteController::class)->name('product.delete');
});
