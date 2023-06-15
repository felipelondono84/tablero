<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medidas;

class MedidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medida = Medidas::all();
        
        return view('medidas.index',['medidas' => $medida]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medidas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medida = new Medidas();
        $medida->nombre = $request->input('nombre');
       
        $medida->save();

        return view("medidas.message", ['msg' => "Unidad de medida Guardado"]);
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
        $medidas = Medidas::find($id);

        return view('medidas.edit', ['medidas' => $medidas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medidas = Medidas::find($id);
        $medidas->nombre = $request->input('nombre');
        $medidas->save();

        return view("medidas.message", ['msg' => "Unidad de medida Actualizada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
