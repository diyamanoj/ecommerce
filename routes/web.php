<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;



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

Route::get('/',[FrontendController::class,'homePage'])->name('home');


Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('products', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('products/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');
});


Route::get('products', [ProductController::class, 'list'])->name('products.list');
Route::post('cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/update', [CartController::class, 'update'])->name('cart.update');
