<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('keluar', function () {
    Auth::logout();
    return redirect()->to('login');
})->name('keluar');

Route::middleware(['checkLevel:3'])->group(function () {});
Route::resource('penjualan', \App\Http\Controllers\TransactionController::class);
Route::resource('product', \App\Http\Controllers\ProductController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('level', \App\Http\Controllers\LevelController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);

Route::get('get-products/{category_id}', [\App\Http\Controllers\TransactionController::class, 'getProducts']);
Route::get('get-product/{product_id}', [\App\Http\Controllers\TransactionController::class, 'getProduct']);
Route::get('print/{id}', [\App\Http\Controllers\TransactionController::class, 'print']);

// Route::get('user', [\App\Http\Controllers\UserController::class, 'index']);
// Route::get('user.create', [\App\Http\Controllers\UserController::class, 'create']);
// Route::post('user.store', [\App\Http\Controllers\UserController::class, 'store']);
