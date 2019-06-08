<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\flash;
use Validator;
use Storage;

class MaterialController extends Controller
{   
    function index($id_materia, $name)
    {   
        $materias = DB::table('material_didactico')
                ->where('id_materia', '=', $id_materia)
                ->get();

        #return json_encode($materias);
        return view('pantallas.material', compact('id_materia', 'materias', 'name'));#, compact($carrera, $semestre));
    }

    function delete($id_material, $id_materia, $name)
    {   
        $material = Material::find($id_material);
        $material->delete();
        #return $material->recurso;
        Storage::delete('public/'.$material->recurso);
        $materias = DB::table('material_didactico')
                ->where('id_materia', '=', $id_materia)
                ->get();

        flash('¡Material eliminado con éxito!')->success();
        return view('pantallas.material', compact('id_materia','materias', 'name'));
    }

    function add($id_materia, $name) {
        #return $id_materia;
        $carrera = DB::table('carrera')
                ->join('materia', 'materia.id_carrera', '=', 'carrera.id')
                ->select('carrera.nombre')
                ->where('materia.id', '=', $id_materia)
                ->first();
        #return $carrera;
        return view('pantallas.view-addmaterial1', compact('id_materia', 'name', 'carrera'));
    }

    public function addMaterial(Request $request){
        $id_materia = $request['id_materia'];
        
        $file = $request->file('recurso');
        $nombre = $file->getClientOriginalName();
        
        $path = $request->file('recurso')->storeAs(
            'public', $nombre
        );
        #return $path;
        $request->recurso = $path;
        
        $name = DB::table('itesz.materia')
                ->select('nombre')
                ->where('id', $request['id_materia'])
                ->first();
        $name = $name->nombre;
        $vali = Validator::make($request->all(), [
                'nombre' => ['required', 'string', 'max:255'],
                'tipo' => ['required', 'string', 'max:255'],
                'recurso' => ['required', 'string', 'max:255'],
                'link' => ['required', 'string', 'max:500'],
                'id_materia' => ['requerid', 'integer'],
            ]);
        
        Material::create([
                'nombre' => $request['nombre'],
                'tipo' => $request['tipo'],
                'recurso' => $nombre,
                'link' => $request['link'],
                'id_materia' => $request['id_materia'],
            ]);
        

        $carrera = DB::table('carrera')
            ->join('materia', 'materia.id_carrera', '=', 'carrera.id')
            ->select('carrera.nombre')
            ->where('materia.id', '=', $request['id_materia'])
            ->first();
        #return $carrera;
        
        
        flash('¡Material agregado con éxito!')->success();

        return view('pantallas.view-addmaterial1', 
                compact('id_materia', 'name', 'carrera'));
        
    }

    function downloadFile($recurso) {
        return Storage::download('public/'.$recurso);
    }

    function setIdMateria($id_materia) {
        $GLOBALS[id_materia] = $id_materia;
    }

    public function edit(Material $material){
        
        $name = DB::table('itesz.materia')
            ->select('nombre')
            ->where('id', $material['id_materia'])
            ->first();
        $name = $name->nombre;

        flash('Estás a punto de editar un material. Por favor se cuidadoso. :D')->important();
        #return $material;
        return view('pantallas.view-editmaterial',compact('material', 'name'));
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('recurso')) {
            
            $old = DB::table('itesz.material_didactico')
                    ->select('recurso')
                    ->where('id', $id)
                    ->first();

            Storage::delete('public/'.$old->recurso);

            $file = $request->file('recurso');
            $nombre = $file->getClientOriginalName();

            $path = $request->file('recurso')->storeAs(
                'public', $nombre
            );

            Material::find($request->id)->update($request->all());
            $recurso = Material::find($id);
            $recurso->recurso = $nombre;
            $recurso->save();
        }else {  
            $recurso = Material::find($id);
            $recurso->nombre = $request->nombre;
            $recurso->tipo = $request->tipo;
            $recurso->link = $request->link;
            $recurso->id_materia = $request->id_materia;
            $recurso->save();
            Material::find($request->id)->update($request->all());
        }
        flash('Material editado con éxito. :D')->important();
        $material = $request;
        $name = DB::table('itesz.materia')
            ->select('nombre')
            ->where('id', $material['id_materia'])
            ->first();
        $name = $name->nombre;

        return view('pantallas.view-editmaterial', compact('material', 'name'));
       
    }

}
