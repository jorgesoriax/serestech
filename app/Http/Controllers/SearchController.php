<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $query = trim($request->get('query'));

        $specsLaptop = SpecificationsLaptop::search($query)->paginate(9);
        $msgEmpty = 'Sin coincidencias para '.$query.'.';
        return view('home', compact('specsLaptop', 'msgEmpty', 'query'));
    }
    public function panel(Request $request){
        $query = trim($request->get('query'));

        // $specsLaptop = SpecificationsLaptop::search($query)->paginate(15);
        // $msgEmpty = 'No se encontraron coincidencias.';
        
        // return view('panel', compact('specsLaptop', 'msgEmpty', 'query'));
        return $query;
    }
}