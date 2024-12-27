<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repuesto;
class RepuestoController extends Controller
{
    //
    public function save(Request $request){
        $repuesto=Repuesto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'id_marca'=>$request->id_marca
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $repuesto=Repuesto::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $repuesto
        ]);
    }
    public function update(Request $request){
        $repuesto=Repuesto::findOrFail($request->id);
        $repuesto->update(
            [
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'id_marca'=>$request->id_marca

            ]
            );

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $repuesto=Repuesto::findOrFail($request->id);
        $repuesto->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
    public function getDataById(Request $request){
        
        $repuesto=Repuesto::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $repuesto,
        ]);
    }
}
