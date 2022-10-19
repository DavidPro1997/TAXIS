<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\PersonasVehiculosController;
use App\Http\Controllers\VehiculosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/personas', [PersonasController::class,'index'])->name('personas.index');
Route::get('/vehiculos', [VehiculosController::class,'index'])->name('vehiculos.index');
Route::get('/asignaciones', [PersonasvehiculosController::class,'index'])->name('personasVehiculos.index');
Route::post('/store', [PersonasvehiculosController::class,'store'])->name('personasvehiculos.store');