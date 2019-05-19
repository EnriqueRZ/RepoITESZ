<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class MaterialController extends Controller
{
    function index($id_materia, $name)
    {   
        #return $carrera." ".$semestre;

        #return $dat;
        /*
        $dat = DB::table('material_didactico')
                ->join('materia', 'materia.id',  '=', 'material_didactico.id')
                ->join('carrera', 'carrera.id',  '=', 'materia.id_carrera')
                ->select(['material_didactico.nombre',
                        'material_didactico.recurso',
                        'material_didactico.link'])
                ->where('materia.semestre', '=', $semestre, 'and', 'carrera.id', '=', $carrera)
                ->get();
        */
        $materias = DB::table('material_didactico')
                ->where('id_materia', '=', $id_materia)
                ->get();

        #return json_encode($materias);
        return view('pantallas.material', compact('materias', 'name'));#, compact($carrera, $semestre));
    }
}
