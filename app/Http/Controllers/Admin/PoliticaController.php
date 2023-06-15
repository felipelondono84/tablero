<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Politica;
use App\Models\Hechos;


class PoliticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $politicas = Politica::all();
        
        return view('politica.index',['politicas' => $politicas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('politica.create', ['hechos' => Hechos::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $politica = new Politica();
        $politica->nombre = $request->input('nombre');
        $politica->peso = $request->input('peso');
        $politica->descripcion = $request->input('descripcion');
        $politica->hechos_id = $request->input('hechos');
        $politica->save();

        return view("politica.message", ['msg' => "Registro Guardado"]);
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
        $politica = Politica::find($id);

        return view('politica.edit', ['politica' => $politica, 'hechos' => Hechos::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $politica = Politica::find($id);
        $politica->nombre = $request->input('nombre');
        $politica->peso = $request->input('peso');
        $politica->descripcion = $request->input('descripcion');
        $politica->hechos_id = $request->input('hechos');
        $politica->save();

        return view("politica.message", ['msg' => "Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
