<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginPanelController;
use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', HomeController::class);

Route::get('product', ProductController::class); // Con esta sintáxis el controlador buscara __invoke

// Route::get('login-panel', LoginPanelController::class);
// Route::get('panel', PanelController::class);


// TODO Confirmar
// Route::view('home', 'home');
// Route::view('login-panel', 'auth/login-panel')->name('login')->middleware('guest');
// Route::view('panel', 'panel')->middleware('auth');

// Route::post('login-panel', function(){
//     $credentials = request()->validate([
//         'email' => ['required', 'email', 'string'],
//         'password' => ['required', 'string']
//     ]);
//     $remember = request()->filled('remember');

//     if(Auth::attempt($credentials, $remember)){
//         request()->session()->regenerate();

//         return redirect('panel');
//     }
//     return redirect('login-panel');
// });