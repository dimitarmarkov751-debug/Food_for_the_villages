<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
