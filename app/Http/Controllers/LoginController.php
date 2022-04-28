<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;

/**
 * Este controlador se encarga de manejar vistas y funcionamiento para el
 * login hacia el panel de administración
 */
class LoginController extends Controller
{
    /**
     * Esta función muestra la vista Login
     */
    public function index(){
        return view('auth/login');
    }
    /**
     * Esta función se encarga de verificar las credenciales introducidas
     * y la cookie remember que mantiene la sesión activa 
     * Si estas variables son correctas se genera una sesión y el usuario
     * es redirigido hacia el panel de administración
     * 
     * @param object $request  — Establece las credenciales
     * @param object $redirect — Instancia de Redirector para llamar función intended()
     */
    public function login(Request $request, Redirector $redirect){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        $remember = $request->filled('remember');
    
        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
    
            return $redirect->intended(route('panel.index'));
        }
        
        throw ValidationException::withMessages([ 
            'email' => __('auth.failed') 
        ]);
    }
    /**
     * Esta función  se encarga de cerrar la sesión y redirigir al usuario de
     * vuelta a la vista de login
     * 
     * @param object $request  — Establece los parámetros de la sesión
     * @param object $redirect — Instancia de Redirector para redirigir a vista login
     */
    public function logout(Request $request, Redirector $redirect){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to(route('login.index'));
    }
}
