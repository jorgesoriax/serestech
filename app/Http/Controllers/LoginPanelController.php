<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPanelController extends Controller
{
    public function __invoke(){
        return view('login-panel');
    }
}
