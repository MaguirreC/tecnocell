<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function save(Request $request){

        $cliente=Cliente::create(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'telefono'=>$request->telefono,
                'cedula'=>$request->cedula,
                'correo'=>$request->correo,

            ]
            );

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data'=> $cliente
        ]);
    }
    public function getData(Request $request){

        $cliente=Cliente::all();


        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $cliente
        ]);
    }
    public function update(Request $request){

        $cliente=Cliente::findOrFail($request->id);
        $cliente->update([
            'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'telefono'=>$request->telefono,
                'cedula'=>$request->cedula,
                'correo'=>$request->correo,

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
            'data'
        ]);
    }
    public function delete(Request $request){
        $cliente=Cliente::findOrFail($request->id);
        $cliente->delete();


        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
    public function getDataById(Request $request){
        
        $cliente=Cliente::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $cliente,
        ]);
    }
}
