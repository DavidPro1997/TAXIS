<?php

namespace App\Http\Controllers;

use App\Models\Personasvehiculos;
use App\Models\Personas;
use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class PersonasvehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table("personasvehiculos")
            ->select("nombre","apellido","cedula","telefono","marca","modelo","año")
            ->join("personas","personas.id","=","personasvehiculos.idPersona")
            ->join("vehiculos","vehiculos.id","=","personasvehiculos.idVehiculo")
            ->get();
        $personas = Personas::all();
        $vehiculos = Vehiculos::all();
        return view('personasvehiculos', compact('datos','personas','vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $asignacion = new Personasvehiculos();
        $asignacion->idVehiculo = $request->post('vehiculo')[0];
        $asignacion->idPersona = $request->post('persona')[0];
        $asignacion->save();

        return redirect()->route('personasVehiculos.index')->with("success", "Agregado con éxito");
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personasvehiculos  $personasvehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Personasvehiculos $personasvehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personasvehiculos  $personasvehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(Personasvehiculos $personasvehiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personasvehiculos  $personasvehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personasvehiculos $personasvehiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personasvehiculos  $personasvehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personasvehiculos $personasvehiculos)
    {
        //
    }
}
