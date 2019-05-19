<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CarreraController extends Controller
{
    function index($carrera)
    {   
        $dat = DB::table('materia')
                ->select('id', 'nombre', 'semestre')
                ->where('id_carrera', $carrera)
                ->get();

        $datosC = DB::table('carrera')
            ->select('id', 'nombre')
            ->where('id', $carrera)
            ->first();

        #return $datosC->nombre." ".json_encode($dat);
        return view('pantallas/view-semestres', compact('dat', 'datosC'));
    }
}
