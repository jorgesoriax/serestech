<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function create(){ 

    }

    public function show($id){

        $specs = SpecificationsLaptop::find($id);
        return view('product', compact('specs'));
    }

        // $specs = SpecificationsLaptop::all();
        // return view('home', compact('specs'));

    public function edit(){

    }
}
