<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Example;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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

Route::view('/', 'auth/login')->name('login')->middleware('guest');
Route::view('panel', 'panel')->middleware('auth');

Route::get('test', [TestController::class,'index']);

Route::post('/', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);