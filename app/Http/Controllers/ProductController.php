<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(SpecificationsLaptop $specLaptop){
        return view('product', compact('specLaptop'));
    }
}
