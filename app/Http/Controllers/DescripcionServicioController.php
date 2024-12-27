<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DescripcionServicio;

class DescripcionServicioController extends Controller
{
    //
    public function save(Request $request){
        $descripcion=DescripcionServicio::create([
            'precio'=>$request->precio,
            'id_orden'=>$request->id_orden,
            'id_servicio'=>$request->id_servicio

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data'=> $descripcion
        ]);
    }
    public function getData(Request $request){

        $descripcion=DescripcionServicio::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){
        $descripcion=DescripcinServicio::findOrFail($request->id);

        $descripcion->update([
            'precio'=>$request->precio,
            'id_orden'=>$request->id_orden,
            'id_servicio'=>$request->id_servicio

        ]);


        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $descripcion=DescripcionServicio::findOrFail($request->id);
        $descripcion->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
