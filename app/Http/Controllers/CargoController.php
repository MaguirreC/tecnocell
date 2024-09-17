<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{

    //
    public function save(Request $request){

        $cargo=Cargo::create([
            'nombre'=>$request->nombre,
            'id_departamento'=> $request->id_departamento,

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $cargo
            
        ]);
    }
    public function getData(Request $request){

        $cargo=Cargo::all();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $cargo,
        ]);
    }
    public function update(Request $request){

        $cargo= Cargo::findOrFail($request->id);

        $cargo->update([
            'nombre'=>$request->nombre
        
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){

        $cargo=Cargo::findOrFail($request->id);

        $cargo->delete();


        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
