<?php

namespace App\Http\Controllers;

use App\Models\SpecificationsLaptop;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index(){
        $specs = SpecificationsLaptop::all();
        return view('panel', compact('specs'));
    }
}