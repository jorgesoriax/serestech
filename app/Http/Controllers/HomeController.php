<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $specsLaptop = SpecificationsLaptop::paginate(6);
        return view('home', compact('specsLaptop'));
    }
}
