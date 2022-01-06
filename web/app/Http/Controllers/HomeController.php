<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Este controlador con Método invoke adminsitra una sola ruta
    public function __invoke(){
        return view('home');
    }
}
