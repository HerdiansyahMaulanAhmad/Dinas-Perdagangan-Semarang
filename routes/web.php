<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Public Routes
Route::resource('prices', \App\Http\Controllers\FoodPriceController::class)->only(['index']);
Route::resource('markets', \App\Http\Controllers\MarketController::class)->only(['index']);
Route::resource('permits', \App\Http\Controllers\PermitController::class)->only(['create', 'store', 'show']);
Route::resource('posts', \App\Http\Controllers\PostController::class)->only(['index', 'show']);

// Admin Routes
Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

    Route::resource('prices', \App\Http\Controllers\Admin\FoodPriceController::class);
    Route::resource('markets', \App\Http\Controllers\Admin\MarketController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('commodities', \App\Http\Controllers\Admin\CommodityController::class);
});
