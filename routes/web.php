<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/',[ProductController::class,"index"]);
Route::get("/login",function(){
    return view("login");
});
Route::get("/logout",[UserController::class,'logout']);
Route::get("/register",function(){
return view("register");
});
Route::post("/addUser",[UserController::class,'addUser']);
Route::post("/login",[UserController::class,'login']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search'])->name("product.search");
Route::get("/addcart/{id}",[ProductController::class,'addCart'])->name("product.cart");
Route::get("/cartList",[ProductController::class,'cartList'])->name("products.list");
Route::get("/removeCart/{id}",[ProductController::class,'removeCart'])->name("products.remove");
Route::get("/orderNow",[ProductController::class,'orderNow'])->name("product.ordernow");
