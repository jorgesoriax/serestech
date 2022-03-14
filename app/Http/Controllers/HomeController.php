<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $specsLaptop = SpecificationsLaptop::paginate(9);
        $msgEmpty = 'Lo sentimos por el momento no contamos con stock.';

        return view('home', compact('specsLaptop', 'msgEmpty'));
    }
}
