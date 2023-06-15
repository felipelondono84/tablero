<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Politica;
use App\Models\Hechos;
use App\Models\Programas;
use App\Models\Estrategias;

class ProgramasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programas = Programas::all();
        
        return view('programas.index',['programas' => $programas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $hechos = Hechos::all();
        // $hechos = Politicas::all();
        return view('programas.create', ['hechos' => Hechos::all()], ['politicas' => Politica::all()], ['estrategias' => Estrategias::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $programas = new Programas();
        $programas->nombre = $request->input('nombre');
        $programas->peso = $request->input('peso');
        $programas->descripcion = $request->input('descripcion');
        $programas->hechos_id = $request->input('hechos');
        $programas->politica_id = $request->input('politicas');
        $programas->estrategias_id = $request->input('estrategias');
        $programas->save();

        return view("programas.message", ['msg' => "Registro Guardado"]);
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
        $programas = Programas::find($id);

        return view('programas.edit', ['programas' => $programas, 'hechos' => Hechos::all(), 'politicas' => Politica::all(), 'estrategias' => Estrategias::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $programas = Programas::find($id);
        $programas->nombre = $request->input('nombre');
        $programas->peso = $request->input('peso');
        $programas->descripcion = $request->input('descripcion');
        $programas->hechos_id = $request->input('hechos');
        $programas->politica_id = $request->input('politica');
        $programas->estrategias_id = $request->input('estrategia');
        $programas->save();

        return view("programas.message", ['msg' => "Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
