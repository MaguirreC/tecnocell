<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    //
    public function save(Request $request){
        $tecnico=Tecnico::create([
            'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'telefono'=>$request->telefono,
                'id_cargo'=>$request->id_cargo,
                'correo'=>$request->correo,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        
        $tecnico=Tecnico::all();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $tecnico,
        ]);
    }
    public function getDataById(Request $request){
        
        $tecnico=Tecnico::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $tecnico,
        ]);
    }
    public function update(Request $request){
        $tecnico=Tecnico::findOrfail($request->id);
        $tecnico->update([
            'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'telefono'=>$request->telefono,
                'id_cargo'=>$request->id_cargo,
                'correo'=>$request->correo,

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $tecnico=Tecnico::findOrfail($request->id);
        $tecnico->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
