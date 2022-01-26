<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Este controlador con Método invoke administra una sola ruta
    public function index(){

        $specs = SpecificationsLaptop::all();
        return view('home', compact('specs'));
    }
}
