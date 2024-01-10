<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoresController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function () {
// 註解一下
    Route::get('/', function() {
        return redirect('products');
    });

    // 新增商品表單
    Route::get('products/create', [ProductsController::class, 'create'])->name('products.create')->middleware('can:admin');
    // 顯示顯示所有商品資料
    Route::get('products', [ProductsController::class, 'index'])->name('products.index');
    // 顯示單一商品資料
    Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+')->name('products.show');
    // 選定位置查詢商品
    Route::get('products/discount', [ProductsController::class, 'discount'])->name('products.discount');
    // 修改單一商品表單
    Route::get('products/{id}/edit', [ProductsController::class, 'edit'])->where('id', '[0-9]+')->name('products.edit');
    // 刪除單一商品資料
    Route::delete('products/delete/{id}', [ProductsController::class, 'destroy'])->where('id', '[0-9]+')->name('products.destroy')->middleware('can:admin');
    // 修改商品表單
    Route::get('products/{id}/edit', [ProductsController::class, 'edit'])->where('id', '[0-9]+')->name('products.edit');
    // 修改商品資料
    Route::patch('products/update/{id}', [ProductsController::class, 'update'])->where('id', '[0-9]+')->name('products.update');
    // 儲存新商品資料
    Route::post('products/store', [ProductsController::class, 'store'])->where('id', '[0-9]+')->name('products.store')->middleware('can:admin');


    // 顯示顯示所有商店資料
    Route::get('stores', [StoresController::class, 'index'])->name('stores.index');
    // 顯示單一商店資料
    Route::get('stores/{id}', [StoresController::class, 'show'])->where('id', '[0-9]+')->name('stores.show');
    // 修改單一商店表單
    Route::get('stores/{id}/edit', [StoresController::class, 'edit'])->where('id', '[0-9]+')->name('stores.edit');
    // 刪除單一商店及旗下商品資料
    Route::delete('stores/delete/{id}', [StoresController::class, 'destroy'])->where('id', '[0-9]+')->name('stores.destroy')->middleware('can:admin');
    // 新增商店表單
    Route::get('stores/create', [StoresController::class, 'create'])->name('stores.create')->middleware('can:admin');
    // 修改商店表單
    Route::get('stores/update/{id}', [StoresController::class, 'update'])->where('id', '[0-9]+')->name('stores.update');
    // 修改商店資料
    Route::patch('stores/update/{id}', [StoresController::class, 'update'])->where('id', '[0-9]+')->name('stores.update');
    // 儲存新商店資料
    Route::post('stores/store', [StoresController::class, 'store'])->name('stores.store')->middleware('can:admin');
    

});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
