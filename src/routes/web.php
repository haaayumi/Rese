<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;


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
Route::get('/', [ShopController::class, 'index']);
Route::get('/menu1', [MenuController::class, 'index']);
Route::get('/register', [AuthController::class,'getRegister'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/thanks', [AuthController::class, 'showThanks']);

Route::get('/login', [AuthController::class,'getLogin']);
Route::post('/login', [AuthController::class,'postLogin']);
