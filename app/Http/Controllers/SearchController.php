<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Este controlador se encarga de manejar las búsquedas
 */
class SearchController extends Controller
{
    /**
     * Esta función se encarga de realizar una búsqueda en el catálogo
     * 
     * @param object $request — Establece la cadena a buscar
     */
    public function index(Request $request){
        $query = trim($request->get('query'));
        $specsLaptop = SpecificationsLaptop::search($query)->paginate(9);

        $msgEmpty = 'Sin coincidencias para '.$query.'.';
        return view('home', compact('specsLaptop', 'msgEmpty', 'query'));
    }
    /**
     * Esta función se encarga de realizar una búsqueda en el panel
     * 
     * @param object $request — Establece la cadena a buscar
     */
    public function panel(Request $request){
        $query = trim($request->get('query'));

        $specsLaptop = SpecificationsLaptop::search($query)->paginate(15);
        $msgEmpty = 'No se encontraron coincidencias.';
        
        return view('panel', compact('specsLaptop', 'msgEmpty', 'query'));
    }
}