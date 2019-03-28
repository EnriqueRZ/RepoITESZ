<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function showRegisterForm(){
        return view('auth.register');
    }

    /** 
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    public function register(Request $data){
        //return $data;
        $vari = DB::table('itesz.carrera')
            ->select('id')
            ->where('nombre_carrera', $data['id_carrera'])
            ->first();

        echo 'HOLA'; 
        //var_dump($vari);
        //return $vari->id;
        $data['id_carrera'] = $vari->id;     
        return $data;     

        $val = Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'id_carrera' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid', 'integer'],
            
        ]);
         
    
        if($val->fails()){
            echo 'no se pudo';
        }

        echo 'si se pudo ';

        User::create([
            'nombre' => $data['nombre'],
            'id' => $data['id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_tipo_carrera' => $data['id_tipo_usuario'],
            'id_carrera' => $data['id_carrera'],
        ]);
        
    }

    /** 
     * 
     * use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/principal';

    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('guest');
    }
    */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid'],
            'id_carrera' => ['requerid'],
        ]);

        
    }
    */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
    
    protected function create(array $data)
    {
        $profession = DB::table('carrera')
                ->select('id')
                ->where('nombre_carrera', 'isc')
                ->first();
        echo 'hola';

        return User::create([
            'nombre' => $data['nombre'],
            'id' => $data['id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_tipo_carrera' => $data['id_tipo_usuario'],
            'id_carrera' => $data['id_carrera'],
        ]);
    }
     */
}
