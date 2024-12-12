<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServicioController extends Controller
{
    //
    public function save(Request $request){
        $servicio=Servicio::create([
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $servicio=Servicio::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){
        $servicio=Servicio::findOrFail($request->id);
        $servicio->update([
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $servicio=Servicio::findOrFail($request->id);
        $servicio->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
