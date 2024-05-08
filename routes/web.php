<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PaymentController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
//product
Route::get('/show/product/{id}',[ProductController::class,'show']);

//cart
Route::post('/cart/add/{id}',[ProductController::class,'addToCart']);
Route::get('/cart', [CartController::class, 'show']);
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Route to process purchase (dummy action for demonstration)
//Route::post('/cart/purchase', [CartController::class, 'purchase'])->name('cart.purchase');
//payment
Route::get('/cash',[PaymentController::class,'cash']);
Route::get('/visa',[PaymentController::class,'visa']);

//profile
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/delete-account/{user}',[ProfileController::class,'deleteAccount']);
