<?php

use App\Http\Controllers\FoodPriceController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('prices', FoodPriceController::class)->only(['index']);
Route::resource('markets', MarketController::class)->only(['index']);
Route::resource('permits', PermitController::class)->only(['create', 'store', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show']);
