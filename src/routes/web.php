<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;



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

Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogout']);
});

Route::get('/', [ShopController::class, 'index']);
Route::get('/menu1', [MenuController::class, 'index']);
Route::get('/register', [AuthController::class,'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/login', [AuthController::class,'getLogin'])->name('register');
Route::post('/login', [AuthController::class,'postLogin']);
