<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hechos;


class HechosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hechos = Hechos::all();
        
        return view('hechos.index',['hechos' => $hechos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hechos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hechos = new Hechos();
        $hechos->nombre = $request->input('nombre');
        $hechos->peso = $request->input('peso');
        $hechos->descripcion = $request->input('descripcion');
        $hechos->save();

        return view("hechos.message", ['msg' => "Registro Guardado"]);
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
        $hechos = Hechos::find($id);

        return view('hechos.edit', ['hechos' => $hechos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hechos = Hechos::find($id);
        $hechos->nombre = $request->input('nombre');
        $hechos->peso = $request->input('peso');
        $hechos->descripcion = $request->input('descripcion');
        $hechos->save();

        return view("hechos.message", ['msg' => "Hecho Actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
