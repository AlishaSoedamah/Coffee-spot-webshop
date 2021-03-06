<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/products/{id}', [OrderController::class, "index"]);
Route::get('/scammed/{id}', [OrderController::class, "scammed"]);
Route::get('/about-us', [AboutUsController::class, "aboutUs"]);
Route::get('/register', [LoginController::class, "register"]);
Route::post('/register', [LoginController::class, "postUser"]);
Route::get('/products', [ProductController::class, "products"]);
Route::get('/product/{id}', [ProductController::class, "showProduct"]);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/add/{id}', [CartController::class, 'add']);
