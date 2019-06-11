<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Tipo_Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\json;
use Crypt;

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

        $request['id_carrera'] = $vari->id;
        $request['id_tipo_usuario'] = 1; 
        $aux = $request['id'];
        $request['id'] = (int)$aux;        
        
        $vali = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid', 'integer'],
            'id_carrera' => ['required', 'integer'],
        ]);
        $exist = User::find($request->id);
        if($vali == true) {

            if($exist == null){
                if($request->password != $request->password_confirmation){
                    flash('ERROR: confirmación de contraseñas incorrecta.')->error();
                    return view('auth.register');
                } else{
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
            } else {
                flash('ERROR: el usuario con el número de control ya está registrado. Favor de revisar los datos.')->error();
                return view('auth.register');
            }
            
        } else {
            flash('ERROR: ocurrió un problema')->error();
            return view('auth.register');
        }
        
    }

    public function addUserAdmin(Request $request) {
       

        $vali = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'id' => ['required', 'integer', 'unique'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'id_tipo_usuario' => ['requerid', 'integer'],
            'id_carrera' => ['required', 'integer'],
        ]);
        $exist = User::find($request->id);
        if($vali == true) {

            if($exist == null){
                if($request->password != $request->password_confirmation){
                    flash('ERROR: confirmación de contraseñas incorrecta.')->error()->important();
                    return view('pantallas.addUsuario');
                } else{
                    User::create([
                        'nombre' => $request['nombre'],
                        'id' => $request['id'],
                        'email' => $request['email'],
                        'password' => Hash::make($request['password']),
                        'id_tipo_usuario' => $request['id_tipo_usuario'],
                        'id_carrera' => $request['id_carrera'],
                    ]);
                   
                    flash('Usuario '.$request->nombre.' agregado con éxito.')->success()->important();
                    return view('pantallas.addUsuario');
                }
            } else {
                flash('ERROR: el usuario con el número de control ya está registrado. Favor de revisar los datos.')->error()->important();
                return view('pantallas.addUsuario');
            }
            
        } else {
            flash('ERROR: ocurrió un problema')->error()->important();
            return view('pantallas.addUsuario');
        }
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
    public function edit($id)
    {
        $usuario = DB::table('users')
                    ->select('users.id', 'users.password','users.nombre', 'users.email', 
                            'tipo_usuario.nombre_tipo_usuario', 'tipo_usuario.id as uid',
                            'carrera.nombre as cname', 'carrera.id as cid')
                    ->join('carrera', 'carrera.id', '=', 'users.id_carrera')
                    ->join('tipo_usuario', 'tipo_usuario.id', '=', 'users.id_tipo_usuario')
                    ->where('users.id', $id)
                    ->first();
        
        flash('Está a punto de editar datos importantes. Por favor tenga cuidado :D')->warning()->important();
        return view('pantallas.editUsuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //return $request;
        if($request->password == null) {

            try{
                $user = User::find($id);
                $user->id = $request->id;
                $user->nombre = $request->nombre;
                $user->email = $request->email;
                $user->id_carrera = $request->id_carrera;
                $user->id_tipo_usuario = $request->id_tipo;
                $user->save();
                $usuario = $request;
                flash('Usuario editado con éxito')->success()->important();  
                return view('pantallas.editUsuario', compact('usuario'));  
            }catch(Exception $e) {
                $usuario = $request;
                flash('Ocurrio un problema. El ID ya existe.')->error()->important();
                return view('pantallas.editUsuario', compact('usuario'));
            }
        } else {
            try{
                //User::find($id)->update($request->all());
                $user = User::find($id);
                $user->id = $request->id;
                $user->nombre = $request->nombre;
                $user->email = $request->email;
                $user->id_carrera = $request->id_carrera;
                $user->id_tipo_usuario = $request->id_tipo;
                $user->password = Hash::make($request->password);
                $user->save();
                flash('Usuario editado con éxito')->success()->important();
                $usuario = $request;
            return view('pantallas.editUsuario', compact('usuario'));    
            }catch(Exception $e){
                $usuario = $request;
                flash('Ocurrio un problema. El ID ya existe.')->error()->important();
                return view('pantallas.editUsuario', compact('usuario'));
            }
            $usuario = $request;
            return view('pantallas.editUsuario', compact('usuario'));
        }
        
        #User::find($request->id)->update($request->all());
        #return view('pantallas.editUsuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroyU($id) {
        $usuario = User::find($request->$id);
        $usuario->delete();
        flash('¡Usuario eliminado con éxito!')->success()->important();
        return view('pantallas.usuarios');
    }

    public function usuarios() {
        return view('pantallas.usuarios');
    }

    public function allUsuarios(){
        $usuarios = DB::table('users')
                    ->select('users.id', 'users.nombre', 'users.email', 
                            'tipo_usuario.nombre_tipo_usuario', 'tipo_usuario.id as uid',
                            'carrera.nombre as cname', 'carrera.id as cid')
                    ->join('carrera', 'carrera.id', '=', 'users.id_carrera')
                    ->join('tipo_usuario', 'tipo_usuario.id', '=', 'users.id_tipo_usuario')
                    ->get();
        return $usuarios;
        //return view('pantallas.usuarios', compact('usuarios'));
    }

    public function filtroUsuarios($id_carrera, $id_tipo_usuario){
        $usuarios = DB::table('users')
                    ->select('users.id', 'users.nombre', 'users.email', 
                            'tipo_usuario.nombre_tipo_usuario', 'tipo_usuario.id as uid',
                            'carrera.nombre as cname', 'carrera.id as cid')
                    ->join('carrera', 'carrera.id', '=', 'users.id_carrera')
                    ->join('tipo_usuario', 'tipo_usuario.id', '=', 'users.id_tipo_usuario')
                    ->where('carrera.id', $id_carrera)
                    ->where('tipo_usuario.id', $id_tipo_usuario)
                    ->get();
        return $usuarios;
    }

    public function byTipoUser() {
        return Tipo_Usuario::all();
        
    }
}
