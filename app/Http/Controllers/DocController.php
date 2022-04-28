<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Este controlador se encarga de manejar vistas de documentos
 */
class DocController extends Controller
{
    public function cookies(){
        return view('docs/cookiesPolicy');
    }
}
