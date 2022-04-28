<?php

use App\Http\Controllers\DocController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
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

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
|
| — La route en middleware Authenticate se ha modificado
*/

// Muestra vista login
Route::get('/YS9Onsuk', [LoginController::class, 'index'])
    ->name('login.index')
    ->middleware('guest');
// Ejecuta función login
Route::post('YS9Onsuk', [LoginController::class, 'login']);
// Ejecuta función logout
Route::post('logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Panel
|--------------------------------------------------------------------------
|
| — La const HOME en Providers/RouteServiceProvider se ha modificado
*/

// Muestra vista panel
Route::get('HJFs28sd', [PanelController::class, 'index'])
    ->name('panel.index')
    ->middleware('auth');

// Ejecuta función search
Route::get('panel/search', [SearchController::class, 'panel'])
    ->name('search.panel');

/**
 * * Slider
 * 
 * 1 — Muestra formulario Create para slider
 * 2 — Ejecuta función sliderStore
 */
Route::get('panel/slider', [PanelController::class, 'slider'])
    ->name('panel.slider')
    ->middleware('auth');
Route::post('panel/slider/store', [PanelController::class, 'sliderStore'])
    ->name('slider.store')
    ->middleware('auth');

/**
 * * Create
 * 
 * 1 — Muestra formulario Create
 * 2 — Ejecuta función store
 */
Route::get('panel/create', [PanelController::class, 'create'])
    ->name('panel.create')
    ->middleware('auth');
Route::post('panel', [PanelController::class, 'store'])
    ->name('panel.store')
    ->middleware('auth');

/**
 * * Read
 * 
 * 1 — Muestra formulario Read
 */
Route::get('panel/{specLaptop}', [PanelController::class, 'show'])
->name('panel.show')
->middleware('auth');

/**
 * * Update
 * 
 * 1 — Muestra formulario Edit
 * 2 — Ejecuta función update
 * 3 — Ejecuta función replace, elimina imagenes existentes en formulario Update
 */

Route::get('panel/edit/{specLaptop}', [PanelController::class, 'edit'])
    ->name('panel.edit')
    ->middleware('auth');
Route::put('panel/{specLaptop}', [PanelController::class, 'update'])
    ->name('panel.update')
    ->middleware('auth');
Route::get('panel/{specLaptop}/replace/{col}', [PanelController::class, 'replace'])
    ->name('replace.index')
    ->middleware('auth');

/**
 * * Delete
 * 
 * 1 — Muestra vista Delete
 * 2 — Ejecuta función destroy
 */
Route::get('panel/delete/{specLaptop}', [PanelController::class, 'delete'])
    ->name('panel.delete')
    ->middleware('auth');
Route::delete('panel/{specLaptop}', [PanelController::class, 'destroy'])
    ->name('panel.destroy')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

// Muestra vista home
Route::get('/', [HomeController::class, 'index'])   
    ->name('home.index');
// Ejecuta función sort
Route::get('/sort', [HomeController::class, 'sort'])
    ->name('home.sort');
// Ejecuta función search
Route::get('/search', [SearchController::class, 'index'])
    ->name('search.home');
// Muestra vista product
Route::get('/{specLaptop}', [ProductController::class, 'show'])
    ->name('product.index');

/*
|--------------------------------------------------------------------------
| Documentos
|--------------------------------------------------------------------------
*/

Route::get('cookies-policy', [DocController::class, 'cookies'])
    ->name('docs.cookies');

/*
|--------------------------------------------------------------------------
| CMD
|--------------------------------------------------------------------------
|
| Permite ejecutar comandos Artisan desde la barra de búsqueda de nuestro navegador
*/

Route::get('/cmd/{command}', function($command){
    Artisan::call($command);
    dd(Artisan::output());
});