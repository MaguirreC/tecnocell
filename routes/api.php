<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DescripcionServicioController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\CargoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/cargos/datos', [CargoController::class, 'getData']);
Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});


Route::controller(CiudadController::class)->group(function(){
    Route::get('/ciudades/datos', 'getData');
    Route::put('/ciudades/update', 'update');
    Route::delete('/ciudades/delete', 'delete');
    Route::post('/ciudades/save', 'save');
});

Route::controller(ClienteController::class)->group(function(){
    Route::get('/clientes/datos', 'getData');
    Route::put('/clientes/update', 'update');
    Route::delete('/clientes/delete', 'delete');
    Route::post('/clientes/save', 'save');
});
Route::controller(DepartamentoController::class)->group(function(){
    Route::get('/departamentos/datos', 'getData');
    Route::put('/departamentos/update', 'update');
    Route::delete('/departamentos/delete', 'delete');
    Route::post('/departamentos/save', 'save');
});

Route::controller(DescripcionServicioController::class)->group(function(){
    Route::get('/descripcion/datos', 'getData');
    Route::put('/descripcion/update', 'update');
    Route::delete('/descripcion/delete', 'delete');
    Route::post('/descripcion/save', 'save');
});
Route::controller(DispositivoController::class)->group(function(){
    Route::get('/dispositivos/datos', 'getData');
    Route::put('/dispositivos/update', 'update');
    Route::delete('/dispositivos/delete', 'delete');
    Route::post('/dispositivos/save', 'save');
});
Route::controller(FacturaController::class)->group(function(){
    Route::get('/facturas/datos', 'getData');
    Route::put('/facturas/update', 'update');
    Route::delete('/facturas/delete', 'delete');
    Route::post('/facturas/save', 'save');
});
Route::controller(InventarioController::class)->group(function(){
    Route::get('/inventario/datos', 'getData');
    Route::put('/inventario/update', 'update');
    Route::delete('/inventario/delete', 'delete');
    Route::post('/inventario/save', 'save');
});
Route::controller(MarcaController::class)->group(function(){
    Route::get('/marca/datos', 'getData');
    Route::put('/marca/update', 'update');
    Route::delete('/marca/delete', 'delete');
    Route::post('/marca/save', 'save');
});
Route::controller(OrdenController::class)->group(function(){
    Route::get('/orden/datos', 'getData');
    Route::put('/orden/update', 'update');
    Route::delete('/orden/delete', 'delete');
    Route::post('/orden/save', 'save');
});
Route::controller(RepuestoController::class)->group(function(){
    Route::get('/repuesto/datos', 'getData');
    Route::put('/repuesto/update', 'update');
    Route::delete('/repuesto/delete', 'delete');
    Route::post('/repuesto/save', 'save');
});
Route::controller(ServicioController::class)->group(function(){
    Route::get('/servicio/datos', 'getData');
    Route::put('/servicio/update', 'update');
    Route::delete('/servicio/delete', 'delete');
    Route::post('/servicio/save', 'save');
});
Route::controller(TecnicoController::class)->group(function(){
    Route::get('/tecnico/datos', 'getData');
    Route::put('/tecnico/update', 'update');
    Route::delete('/tecnico/delete', 'delete');
    Route::post('/tecnico/save', 'save');
});
