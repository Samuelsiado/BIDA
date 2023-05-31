<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\View\Middleware\ShareErrorsFromSession;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    #Funcion para que sea lea usuario y contraseña //No se define $username
    // public function username()
    // {
    //     #obtener valor del user
    //     $loginValue = request('username');
    //     #validar si es email o texto
    //     $this->$username=filter_var($loginValue, FILTER_VALIDATE_EMAIL) ? 'email' :'username';
    //     #unir los valores
    //     request()->merge([$this->username=> $loginValue]);
    //     #retornar el inicio de sesión
    //     return property_exists($this, 'username') ? $this->username : 'email';
    // }
}
