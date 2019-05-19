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

    public function showRegisterForm(){
        return view('auth.register');
    }

    use RegistersUsers;

  
    protected function validator(array $data)
    {
         $vari = DB::table('itesz.carrera')
            ->select('id')
            ->where('nombre', $data['id_carrera'])
            ->first();

        //echo 'HOLA'; 
        //var_dump($vari);
        //return $vari->id;
        $data['id_carrera'] = $vari->id;
        $data['id_tipo_usuario'] = 1; 
        $aux = $data['id'];
        $data['id'] = (int)$aux;    
        //return $data;     

        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'id_carrera' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid', 'integer'],
        ]);

        
    }

    protected function create(array $data)
    {
        $profession = DB::table('carrera')
                ->select('id')
                ->where('nombre', 'isc')
                ->first();
        echo 'hola';

        return User::create([
            'nombre' => $data['nombre'],
            'id' => $data['id'],
            'email' => $data['email'],
            'id_carrera' => $data['id_carrera'],
            'password' => Hash::make($data['password']),
            'id_tipo_carrera' => $data['id_tipo_usuario'],
        ]);
    }
    
}
