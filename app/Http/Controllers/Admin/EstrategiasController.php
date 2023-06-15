<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Politica;
use App\Models\Hechos;
use App\Models\Estrategias;

class EstrategiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estrategias = Estrategias::all();
        
        return view('estrategias.index',['estrategias' => $estrategias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estrategias.create', ['hechos' => Hechos::all()], ['politicas' => Politica::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estrategias = new Estrategias();
        $estrategias->nombre = $request->input('nombre');
        $estrategias->peso = $request->input('peso');
        $estrategias->descripcion = $request->input('descripcion');
        $estrategias->hechos_id = $request->input('hechos');
        $estrategias->politica_id = $request->input('politicas');
        $estrategias->save();

        return view("estrategias.message", ['msg' => "Registro Guardado"]);
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
        $estrategias = Estrategias::find($id);

        return view('estrategias.edit', ['estrategias' => $estrategias, 'hechos' => Hechos::all(), 'politicas' => Politica::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estrategias = Estrategias::find($id);
        $estrategias->nombre = $request->input('nombre');
        $estrategias->peso = $request->input('peso');
        $estrategias->descripcion = $request->input('descripcion');
        $estrategias->hechos_id = $request->input('hechos');
        $estrategias->politica_id = $request->input('politica');
        $estrategias->save();

        return view("estrategias.message", ['msg' => "Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
