<?php

use App\Http\Controllers\DocController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use GuzzleHttp\Middleware;
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
Route::get('panel/search', [SearchController::class, 'panel'])
    ->name('search.panel');

Route::get('panel/create', [PanelController::class, 'create'])
    ->name('panel.create')
    ->middleware('auth');

Route::get('panel/slider', [PanelController::class, 'slider'])
    ->name('panel.slider')
    ->middleware('auth');
Route::post('panel/slider/store', [PanelController::class, 'sliderStore'])
    ->name('slider.store')
    ->middleware('auth');

Route::get('panel/{specLaptop}', [PanelController::class, 'show'])
    ->name('panel.show')
    ->middleware('auth');

Route::post('panel', [PanelController::class, 'store'])
    ->name('panel.store')
    ->middleware('auth');
    

Route::get('panel/edit/{specLaptop}', [PanelController::class, 'edit'])
    ->name('panel.edit')
    ->middleware('auth');
Route::put('panel/{specLaptop}', [PanelController::class, 'update'])
    ->name('panel.update')
    ->middleware('auth');

Route::get('panel/delete/{specLaptop}', [PanelController::class, 'delete'])
    ->name('panel.delete')
    ->middleware('auth');
Route::delete('panel/{specLaptop}', [PanelController::class, 'destroy'])
    ->name('panel.destroy')
    ->middleware('auth');

// Utilizamos esta ruta para eliminar imagenes existentes
Route::get('panel/{specLaptop}/replace/{col}', [PanelController::class, 'replace'])
    ->name('replace.index')
    ->middleware('auth');
/**
 * * DOCS
 */
// Route::get('', [DocController::class, 'manual'])->name('doc.manual')->middleware('auth');
Route::get('cookies-policy', [DocController::class, 'cookies'])->name('docs.cookies');
/**
 * * HOME
 */
Route::get('/', [HomeController::class, 'index'])   
    ->name('home.index');
    Route::get('/search', [SearchController::class, 'index'])
    ->name('search.home');

Route::get('/{specLaptop}', [ProductController::class, 'show'])
    ->name('product.index');
/**
 * CMD
 * Permite ejecutar comandos Artisan desde la barra de búsquedade nuestro navegador
 */
Route::get('/cmd/{command}', function($command){
    Artisan::call($command);
    dd(Artisan::output());
});