<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('products');
});

// 顯示顯示所有商品資料
Route::get('products', [ProductsController::class, 'index'])->name('products.index');
// 顯示單一商品資料
Route::get('players/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+')->name('products.show');
// 修改單一商品表單
Route::get('players/{id}/edit', [ProductsController::class, 'edit'])->where('id', '[0-9]+')->name('products.edit');

// 顯示顯示所有商店資料
Route::get('teams', [StoresController::class, 'index'])->name('stores.index');
// 顯示單一商店資料
Route::get('teams/{id}', [StoresController::class, 'show'])->where('id', '[0-9]+')->name('stores.show');
// 修改單一商店表單
Route::get('teams/{id}/edit', [StoresController::class, 'edit'])->where('id', '[0-9]+')->name('stores.edit');
