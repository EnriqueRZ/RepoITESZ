<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Storage;
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
            ->select('id', 'nombre', 'cantidad_semestre')
            ->where('id', $carrera)
            ->first();

        #return $datosC->nombre." ".json_encode($dat);
        return view('pantallas/view-semestres', compact('dat', 'datosC'));
    }

    function bySemestre($id) {
        $num_semestres = Carrera::where('id', $id)->get();
        return $num_semestres;
    }

    function byCarrera($id){
        $materias = Carrera::where('id_carrera', $id)->get();
        return $materias; 
    }

    public function allCarrera() {
        $carreras = Carrera::all();
        return $carreras;
    }

    public function destroyC($id) {
        $carrera = Carrera::find($id);
        try{
            $carrera->delete();
            flash('¡Carrera eliminada con éxito!')->success()->important();
            return view('pantallas.carrera');
        } catch (\Illuminate\Database\QueryException $e) {
            flash('¡Ocurrió un problema! No se puede eliminar, la carrera tiene materias y material asocidado.
            Por favor revisar la acción.')->error()->important();
            return view('pantallas.carrera');
        }

        
    }


    function downloadPlan($recurso) {
        return Storage::download('public/'.$recurso);
    }
    
    public function editC($id) {
        $carrera = Carrera::find($id);
        return view('pantallas.editCarrera', compact('carrera'));
    }

    public function updateC(Request $request, $id) {
        try {
            if($request->hasFile('plan_estudios')) {
            
                $old = DB::table('itesz.carrera')
                        ->select('plan_estudios')
                        ->where('id', $id)
                        ->first();
    
                Storage::delete('public/'.$old->plan_estudios);
    
                $file = $request->file('plan_estudios');
                $nombre = date('Y-m-d H:i').'-'.$file->getClientOriginalName();
    
                $path = $request->file('plan_estudios')->storeAs(
                    'public', $nombre
                );
    
                Carrera::find($id)->update($request->all());
                $recurso = Carrera::find($id);
                $recurso->plan_estudios = $nombre;
                $recurso->save();
            }else {  
                $recurso = Carrera::find($id);
                $recurso->nombre = $request->nombre;
                $recurso->cantidad_semestre = $request->cantidad_semestre;
                $recurso->save();
                Carrera::find($id)->update($request->all());
            }
    
            $carrera = $request;
            flash('Actualización correcta :D')->success()->important();
            return view('pantallas.editCarrera', compact('carrera'));

        } catch (Exception $e) {
            $carrera = $request;
            flash('Ocurrió un error :(')->error()->important();
            return view('pantallas.editCarrera', compact('carrera'));
            
        }

       

    }

    public function store(Request $request) {
 
        $file = $request->file('plan_estudios');
        $nombre = date('Y-m-d H:i').'-'.$file->getClientOriginalName();

        $path = $request->file('plan_estudios')->storeAs(
            'public', $nombre
        );
        

        $vali = Validator::make($request->all(), [
                'nombre' => ['required', 'string', 'max:255'],
                'plan_estudios' => ['required', 'string', 'max:255'],
                'cantidad_semestre' => ['requerid', 'integer'],
            ]);
        if($vali == true){
            Carrera::create([
                'nombre' => $request['nombre'],
                'plan_estudios' => $nombre,
                'cantidad_semestre' => $request['cantidad_semestre'],
            ]);
            flash('Carrera agregada con éxito. :)')->success()->important();
            return view('pantallas.addCarrera');
        }else {
            flash('Ocurrió un problema :(')->error()->important();
            return view('pantallas.addCarrera');
        }
        
    } 
}
