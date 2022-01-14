<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;

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
Route::get("/",[DashboardController::class,"index"]);


Route::get('/posts', [ PostController::class,"index"]);
Route::post('/posts', [ PostController::class,"store"]);


Route::get('/register', [ RegisterController::class,"index"]);
Route::post('/register', [ RegisterController::class,"store"]);


Route::get('/login', [ LoginController::class,"index"]);
Route::post('/login', [ LoginController::class,"store"]);

Route::get('/dash', [ DashboardController::class,"index"]);

Route::get('/logout', [ LogoutController::class,"index"]);

