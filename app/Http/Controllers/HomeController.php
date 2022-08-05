<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Este controlador se encarga de manejar vistas y funcionamiento para el inicio
 */
/**
 * Products::where('city',$usercity) ->orWhere('state',$userstate) ->orWhere('country',$usercountry) ->orderByRaw(' CASE WHEN city = ? THEN 1 WHEN state = ? THEN 2 WHEN country = ? THEN 3 ELSE 4 END',[$usercity,$userstate,$usercountry])->get();
 */
class HomeController extends Controller
{
    /**
     * Esta función muestra la vista Home y un mensaje para DB vacía
     */
    public function index(){
        // Laravel ordering results by specific values
        // https://stackoverflow.com/questions/26045934/laravel-ordering-results-by-specific-values
        $specsLaptop = SpecificationsLaptop::join('products', 'specifications_laptops.product_id', '=', 'products.id')
                                            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
                                            ->orderByRaw('FIELD(stock, 0) ASC')
                                            ->orderBy('inventories.created_at', 'asc')
                                            ->paginate(9);

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
            $specsLaptop = SpecificationsLaptop::join('products', 'products.id', '=', 'product_id')
                ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
                ->orderByRaw('FIELD(stock, 0) ASC')
                ->orderBy('products.price', $direction)
                ->paginate(9);

            $msgEmpty = 'Lo sentimos por el momento no contamos con stock.';

            return view('home', compact('specsLaptop', 'msgEmpty', 'direction'));
        } else {
            // Predeterminado
            return redirect()->route('home.index');
        }
    }
}
