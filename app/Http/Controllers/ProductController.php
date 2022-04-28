<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;

/**
 * Esta función muestra la vista Product, información detallada
 * sobre un producto
 * 
 * @param object $specLaptop — Establece registro a mostrar al compararlo con el campo id o slug en búsqueda de coincidencias
 */
class ProductController extends Controller
{
    public function show(SpecificationsLaptop $specLaptop){
        return view('product', compact('specLaptop'));
    }
}
