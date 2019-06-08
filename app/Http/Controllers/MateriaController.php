<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\Carrera;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\flash;
use Validator;

class MateriaController extends Controller
{
    function index($id_carrera, $semestre){
        $info = Carrera::find($id_carrera);
        
        return view('pantallas.addMateria', compact('info', 'semestre'));    
    }

    function byCarrera($id){
        $materias = Materia::where('id_carrera', $id)->get();
        return $materias; 
    }

    function addMateria(Request $request) {
        #return $request;
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->semestre = (int)$request->semestre;
        $semestre = $request->semestre;
        $materia->id_carrera = $request->id_carrera;
        $materia->save();
        $id = $request->id_carrera;
        flash('¡Materia agregada con éxito!')->success();
        $info = Carrera::find($id);
        return view('pantallas.addMateria', compact('info', 'semestre')); 
    }

    function admin($id_carrera, $semestre) { 
        $materias = DB::table('materia')
                ->select('materia.id','materia.nombre','materia.semestre','materia.id_carrera','carrera.nombre as cname')
                ->join('carrera', 'carrera.id', 'materia.id_carrera')
                ->where('materia.semestre', $semestre)
                ->get();
        
        #return json_encode($materias);
        return view('pantallas.admin-materias', compact('id_carrera', 'materias', 'semestre'));#, compact($carrera, $semestre));
    }

    function delete($id_materia) {   
        $materia = Materia::find($id_materia);
        $id_carrera = $materia->id_carrera;
        $semestre = $materia->semestre;

        try{
            $materia->delete();
            
            #return json_encode($materias);
            flash('¡Materia eliminado con éxito!')->success()->important();
            
        } catch (\Illuminate\Database\QueryException $e) {
            #return json_encode($materias);
            flash('¡Ocurrió un problema! No se puede eliminar, 
            la materia tiene asociados materiales didácticos. ')->error()->important();
            #return view('pantallas.admin-materias', compact('id_materia', 'materias', 'name'));
        }
        $materias = DB::table('materia')
                    ->select('materia.id','materia.nombre','materia.semestre','materia.id_carrera','carrera.nombre as cname')
                    ->join('carrera', 'carrera.id', 'materia.id_carrera')
                    ->where('materia.semestre', $semestre)
                    ->get();
        return view('pantallas.admin-materias', compact('id_carrera', 'materias', 'semestre'));
    }

}
