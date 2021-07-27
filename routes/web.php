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