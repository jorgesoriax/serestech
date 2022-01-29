<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        $specsLaptop = SpecificationsLaptop::find($id);
        return view('product', compact('specsLaptop'));
    }

    public function edit(){

    }
}
