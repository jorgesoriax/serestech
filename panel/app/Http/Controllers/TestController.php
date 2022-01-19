<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SpecificationsLaptop;

class TestController extends Controller
{
    public function index(){
        $productos = SpecificationsLaptop::all();
        return view('test', compact('productos'));
    }
}
