<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
class MarcaController extends Controller
{
    //
    public function save(Request $request){
        $marca=Marca::create([
            'nombre'=>$request->nombre
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $marca=Marca::all();

        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $marca
        ]);
    }
    public function update(Request $request){
        $marca=Marca::findOrFail($request->id);
        $marca->update(
            [
                'nombre'=>$request->nombre
            ]
            );

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){
        $marca=Marca::findOrFail($request->id);
        $marca->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
    public function getDataById(Request $request){
        
        $marca=Marca::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $marca,
        ]);
    }
}
