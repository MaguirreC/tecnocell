<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    //
    public function save(Request $request){
        $orden=Orden::create([
            'id_cliente'=>$request->id_cliente,
            'id_dispositivo'=>$request->id_dispositivo,
            'id_tecnico'=>$request->id_tecnico,
            'fecha'=>$request->fecha
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $orden=Orden::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){
        $orden=Orden::findOrFail($request->id);
        $orden->update([
            'id_cliente'=>$request->id_cliente,
            'id_dispositivo'=>$request->id_dispositivo,
            'id_tecnico'=>$request->id_tecnico,
            'fecha'=>$request->fecha

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $orden=Orden::findOrFail($request->id);
        $orden->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
