<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Politica;
use App\Models\Hechos;
use App\Models\Programas;
use App\Models\Estrategias;
use App\Models\Metas;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metas = Metas::all();
        
        return view('metas.index',['metas' => $metas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metas.create', ['hechos' => Hechos::all()], ['politicas' => Politica::all()], ['estrategias' => Estrategias::all()], ['programas' => Programas::all()]);


    }

    


    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $metas = new Metas();
        $metas->codigo_meta = $request->input('codigo_meta');
        $metas->nombre = $request->input('nombre');
        $metas->indicador = $request->input('indicador');
        $metas->peso = $request->input('peso');
        $metas->tipo_indicador = $request->input('tipo_indicador');
        $metas->linea = $request->input('linea');
        $metas->ano = $request->input('ano');
        $metas->meta1 = $request->input('meta1');
        $metas->meta2 = $request->input('meta2');
        $metas->meta3 = $request->input('meta3');
        $metas->meta4 = $request->input('meta4');
        $metas->metatotal = $request->input('metatotal');
        $metas->recurso1 = $request->input('recurso1');
        $metas->recurso2 = $request->input('recurso2');
        $metas->recurso3 = $request->input('recurso3');
        $metas->recurso4 = $request->input('recurso4');
        $metas->recursototal = $request->input('recursototal');
    
        $metas->hechos_id = $request->input('hechos');
        $metas->politica_id = $request->input('politicas');
        $metas->estrategia_id = $request->input('estrategia');
        $metas->programa_id = $request->input('programa');
        $metas->save();

        return view("programas.message", ['msg' => "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('metas.plan.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $metas = Metas::find($id);

        return view('metas.edit', ['metas' => $metas, 'hechos' => Hechos::all(), 'politicas' => Politica::all(), 'estrategias' => Estrategias::all()]);
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $metas = Metas::find($id);
        // $metas->codigo_meta = $request->input('codigo_meta');
        $metas->nombre = $request->input('nombre');
        // $metas->indicador = $request->input('indicador');
        $metas->peso = $request->input('peso');
        // $metas->tipo_indicador = $request->input('tipo_indicador');
        // $metas->linea = $request->input('linea');
        // $metas->ano = $request->input('ano');
        // $metas->meta1 = $request->input('meta1');
        // $metas->meta2 = $request->input('meta2');
        // $metas->meta3 = $request->input('meta3');
        // $metas->meta4 = $request->input('meta4');
        // $metas->metatotal = $request->input('metatotal');
        // $metas->recurso1 = $request->input('recurso1');
        // $metas->recurso2 = $request->input('recurso2');
        // $metas->recurso3 = $request->input('recurso3');
        // $metas->recurso4 = $request->input('recurso4');
        // $metas->recursototal = $request->input('recursototal');
    
        $metas->hechos_id = $request->input('hechos');
        $metas->politica_id = $request->input('politica');
        // $metas->estrategia_id = $request->input('estrategia');
        // $metas->programa_id = $request->input('programa');
        $metas->save();

        return view("programas.message", ['msg' => "Registro Guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
