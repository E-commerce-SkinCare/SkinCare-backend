<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
        //auth
//register
Route::post('/register',[AuthController::class,'register']) ;
//logout
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
//login
Route::post('/login',[AuthController::class,'login']);


Route::get('/products',[ProductController::class,'index']);


        //cart
        // Route::post('/carts/{cart}', 'CartController@addProducts');
        // Route::put('/cart/update/{orderItemId}', [CartController::class, 'updateCartItem']);
        // Route::get('/cart', [CartController::class, 'getCartItems']);
        // Route::post('/cart/place-order', [CartController::class, 'placeOrder']);

        //
