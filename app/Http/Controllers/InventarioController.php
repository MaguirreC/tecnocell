<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
class InventarioController extends Controller
{
    //
    public function save(Request $request){
        $inventario=Inventario::create([
            'nombre'=>$request->nombre,
            'fecha_compra'=>$request->fecha_compra,
            'fecha_venta'=>$request->fecha_venta,
             'id_repuesto'=>$request->id_repuesto
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $inventario=Inventario::all();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
        ]);
    }
    public function update(Request $request){
        $inventario=Inventario::findOrFail($request->id);

        $inventario->update([
            'nombre'=>$request->nombre,
            'fecha_compra'=>$request->fecha_compra,
            'fecha_venta'=>$request->fecha_venta,
             'id_repuesto'=>$request->id_repuesto

        ]);
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){

        $inventario=Inventario::findOrFail($request->id);
        $inventario->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
}
