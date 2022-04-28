<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

/**
 * Este controlador se encarga de manejar vistas y funcionamiento para el inicio
 */
class HomeController extends Controller
{
    /**
     * Esta función muestra la vista Home y un mensaje para DB vacía
     */
    public function index(){
        $specsLaptop = SpecificationsLaptop::paginate(9);
        $msgEmpty = 'Lo sentimos por el momento no contamos con stock.';

        return view('home', compact('specsLaptop', 'msgEmpty'));
    }
    /**
     * Esta función realiza el filtro de registros, si $direction es ascendente o descendente
     * se realiza una nueva consulta con la variable $direction como parámetro para método orderBy(),
     * si no, se recarga la vista con el orden por defecto
     * 
     * @param object $request — Establece la orientación para el orden de los registros
     */
    public function sort(Request $request){
        $direction = $request->get('direction');

        if ($direction == 'asc' || $direction == 'desc') {
            $specsLaptop = SpecificationsLaptop::join('products', 'products.id', '=', 'product_id')->orderBy('products.price', $direction)->paginate(9);
            $msgEmpty = 'Lo sentimos por el momento no contamos con stock.';

            return view('home', compact('specsLaptop', 'msgEmpty', 'direction'));
        } else {
            return redirect()->route('home.index');
        }
    }
}
