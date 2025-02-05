<?php

use App\Http\Controllers\Product\CreateController;
use App\Http\Controllers\Product\StoreController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Product', 'prefix' => 'products'], function () {
    Route::get('/create', CreateController::class)->name('product.create');
    Route::post('/', StoreController::class)->name('product.store');
});
