<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;        

class FacturaController extends Controller
{
    //
    public function save(Request $request){
        $factura=Factura::create([
            'id_descripcion_servicio'=>$request->id_descripcion_servicio,
            'fecha'=>$request->fecha,
            'total'=>$request->total,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $factura=Factura::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){
        $factura=Factura::findOrFail($request->id);
        $factura->update([
            'id_descripcion_servicio'=>$request->id_descripcion_servicio,
            'fecha'=>$request->fecha,
            'total'=>$request->total

        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $factura=Factura::findOrFail($request->id);
        $factura->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
