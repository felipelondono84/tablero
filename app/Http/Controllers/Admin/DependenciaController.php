<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dependencias = Dependencia::all();
        
        return view('dependencia.index',['dependencias' => $dependencias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dependencia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Dependencia();
        $alumno->nombre = $request->input('nombre');
        $alumno->descripcion = $request->input('descripcion');
        $alumno->mision = $request->input('mision');
        $alumno->vision = $request->input('vision');
        $alumno->info = $request->input('info');
        $alumno->organigrama = $request->input('organigrama');
        $alumno->save();

        return view("dependencia.message", ['msg' => "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dependencias = Dependencia::find($id);

        return view('dependencia.edit', ['dependencia' => $dependencias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->nombre = $request->input('nombre');
        $dependencia->descripcion = $request->input('descripcion');
        $dependencia->mision = $request->input('mision');
        $dependencia->vision = $request->input('vision');
        $dependencia->info = $request->input('info');
        $dependencia->organigrama = $request->input('organigrama');
        $dependencia->save();

        return view("dependencia.message", ['msg' => "Dependencia Actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->delete();

        return redirect("dependencia");
    }
}
