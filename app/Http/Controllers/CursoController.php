<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Index mpetodo encargado de mostrar página principal 
    public function index(){
        return "Bienvenido a la página principal";
    }

    // Create método para crear 
    public function create(){
        return "En esta página podrás crear un curso";
    }

    // Show método para mostrar un elemento
    public function show($curso){
        return "Bievenido al curso $curso";
    }

}
