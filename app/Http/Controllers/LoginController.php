<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Truncation\TruncationStrategy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function login(Request $request, Redirector $redirect){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        $remember = $request->filled('remember');
    
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
    
            return $redirect->intended('NxjmXULDiNCBL7WDBTkbK7GnJ8hkHh'); // Panel
        }
        
        throw ValidationException::withMessages([ 
            'email' => __('auth.failed') 
        ]);
    }

    public function logout(Request $request, Redirector $redirect){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('login');
    }
}
