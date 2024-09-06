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
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});

Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});
Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});

Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});
Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});
Route::controller(CargoController::class)->group(function(){
    Route::get('/cargos/datos', 'getData');
    Route::put('/cargos/update', 'update');
    Route::delete('/cargos/delete', 'delete');
    Route::post('/cargos/save', 'save');
});
