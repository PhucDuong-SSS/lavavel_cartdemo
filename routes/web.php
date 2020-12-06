<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('showproducts',[ProductController::class,'show'])->name('product.show');
Route::get('addCart/{id}',[CartController::class,'addCart'])->name('cart.add');
Route::get('showCart',[CartController::class,'showCart'])->name('cart.show');
