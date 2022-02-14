<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManualController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * * PANEL
 */
// La route en el middleware Authenticate se ha modificado
Route::get('login', [LoginController::class, 'index'])
     ->name('login.index')
     ->middleware('guest');

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

// Consultar Providers/RouteServiceProvider cada que se cambia ruta
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
Route::get('panel/{specLaptop}/delete', [PanelController::class, 'delete'])
     ->name('panel.delete')
     ->middleware('auth');
Route::delete('panel/{specLaptop}', [PanelController::class, 'destroy'])
     ->name('panel.destroy')
     ->middleware('auth');
/**
 * * MANUAL
 */
Route::get('manual', [ManualController::class, 'index'])->name('manual.index')->middleware('auth');
/**
 * * HOME
 */
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('{id}', [ProductController::class, 'show']);

// * CMD
// Esto nos permite ejecutar comandos Artisan desde la barra de búsqueda
// de nuestro navegador
Route::get('/cmd/{command}', function($command){
    Artisan::call($command);
    dd(Artisan::output());
});
