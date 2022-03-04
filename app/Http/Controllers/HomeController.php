<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $specsLaptop = SpecificationsLaptop::paginate(9);
        
        $msgResultEmpty = 'Lo sentimos por el momento no contamos con stock.';
        return view('home', compact('specsLaptop', 'msgResultEmpty'));
    }
    public function search(Request $request){
        $textClear = trim($request->get('text-search'));
        $specsLaptop = SpecificationsLaptop::where('equipo_marca', $textClear)
                                           ->orWhere('equipo_linea', $textClear)
                                           ->orWhere('equipo_modelo', $textClear)
                                           ->paginate(9);

        $msgResultEmpty = 'Sin coincidencias para '.$textClear.'.';
        return view('home', compact('specsLaptop', 'msgResultEmpty', 'textClear'));
    }
}
