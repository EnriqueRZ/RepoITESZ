<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Session;

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
    public function showLoginForm(){
        return view('pantallas.principal');
    }

    public function login(Request $request){
        //return $request;
        $this->validate(request(), [
            'id' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('id', 'password');

        if(Auth::attempt($credentials, $request->has('remember'))){
            
            return view('pantallas.primerpantalla');
        }

        return 'error';
    }

    public function logout(){
        Auth::logout();

        Session::flush();

        return view('welcome');
    }
}
