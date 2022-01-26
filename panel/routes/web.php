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

// TODO Decidir la manera más eficiente de ordenar las rutas

// La route en el middleware Authenticate se ha midificado
Route::get('/', [LoginController::class, 'index'])
->name('login.index')
->middleware('guest');

Route::post('/', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('panel', [PanelController::class, 'index'])
     ->name('panel.index')
     ->middleware('auth');
Route::get('panel/create', [PanelController::class, 'create'])
     ->name('panel.create')
     ->middleware('auth');
Route::get('panel/{specLaptop}', [PanelController::class, 'show'])
     ->name('panel.show')
     ->middleware('auth');
Route::post('panel', [PanelController::class, 'store'])
     ->name('panel.store')
     ->middleware('auth');
Route::get('panel/{specLaptop}/edit', [PanelController::class, 'edit'])
     ->name('panel.edit')
     ->middleware('auth');
Route::put('panel/{specLaptop}', [PanelController::class, 'update'])
     ->name('panel.update')
     ->middleware('auth');
Route::delete('panel/{specLaptop}', [PanelController::class, 'destroy'])
     ->name('panel.destroy')
     ->middleware('auth');

Route::get('test', [TestController::class,'index'])
     ->name('panel.test');

