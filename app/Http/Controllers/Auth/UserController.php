<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('pantallas.principal');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vari = DB::table('itesz.carrera')
            ->select('id')
            ->where('nombre', $request['id_carrera'])
            ->first();

        #echo 'HOLA'; 
        //var_dump($vari);
        //return $vari->id;
        $request['id_carrera'] = $vari->id;
        $request['id_tipo_usuario'] = 1; 
        $aux = $request['id'];
        $request['id'] = (int)$aux;    
        //return $request;     
        
        $vali = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid', 'integer'],
            'id_carrera' => ['required', 'integer'],
        ]);
         
        User::create([
            'nombre' => $request['nombre'],
            'id' => $request['id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'id_tipo_usuario' => $request['id_tipo_usuario'],
            'id_carrera' => $request['id_carrera'],
        ]);
        $name = $request['nombre'];
        #return $name;
        #$name = Auth::user()->nombre;
        Auth::loginUsingId($request['id']);
        return view('pantallas.primerpantalla', compact('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
