<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;



class DispositivoController extends Controller
{
    //
    public function save(Request $request){
        $dispositivo=Dispositivo::create([
            'tipo'=>$request->tipo,
            'capacidad'=>$request->capacidad,
            'año'=>$request->año,
            'imei'=>$request->imei,
            'id_marca'=>$request->id_marca,
            'id_cliente'=>$request->id_cliente,
        ]);


        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $dispositivo=Dispositivo::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $dispositivo
        ]);
    }
    public function update(Request $request){
        $dispositivo=Dispositivo::findOrFail($request->id);

        $dispositivo->update(['tipo'=>$request->tipo,
            'capacidad'=>$request->capacidad,
            'año'=>$request->año,
            'imei'=>$request->imei,
            'id_marca'=>$request->id_marca,
            'id_cliente'=>$request->id_cliente,

    ]);
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $dispositivo=Dispositivo::findOrFail($request->id);
        $dispositivo->delete();


        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
    public function getDataById(Request $request){
        
        $dispositivo=Dispositivo::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $dispositivo,
        ]);
    }
}
