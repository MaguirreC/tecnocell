<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    //
    public function save(Request $request){

        $ciudad = Ciudad::create([
            'nombre'=>$request->nombre,
            'id_departamento'=>$request->id_departamento
            ]

        );

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data'=> $ciudad
        ]);
    }
    public function getData(Request $request){
        $ciudad = Ciudad::all();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){

        $ciudad= Ciudad::findOrFail($request->id);

        $ciudad->update([
            'nombre'=>$request->nombre,
            'id_departamento'=>$request->id_departamento
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){

        $ciudad=Ciudad::findOrFail($request->id);
        $ciudad->delete();



        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
