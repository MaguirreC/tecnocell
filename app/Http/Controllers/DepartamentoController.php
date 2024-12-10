<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    //
    public function save(Request $request){
        $departamento=Departamento::create([
            'nombre'=>$request->nombre,

        ]);


        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function getData(Request $request){
        $departamento=Departamento::all();



        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'datos'=>$departamento
        ]);
    }
    public function update(Request $request){
        $departamento= Departamento::findOrFail($request->id);

        $departamento->update([
            'nombre'=>$request->nombre,
            'id_departamento'=>$request->id_departamento
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function delete(Request $request){

        $departamento=Departamento::findOrFail($request->id);

        $departamento->delete();

        return response()->json([
            'status' => '200',
            'message' => 'eliminadp con exito',
        ]);
    }
    public function getDataById(Request $request){
        
        $departamento=Departamento::where('id',$request->id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'data obtenida',
            'data'=> $departamento,
        ]);
    }
}
