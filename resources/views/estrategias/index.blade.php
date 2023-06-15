@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Estrategias</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('estrategias.create')}}">Crear Estrategia</a>
        </div>
    @php
        $heads = [
        'ID',
        'Hecho',
        'Politica',
        'Nombre',
        'Peso',
        'Descripción',
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($estrategias as $estrategia)
                <tr>
                    <td>{{$estrategia->id}}</td>
                    <td>{{$estrategia->hechos->nombre}}</td>
                    <td>{{$estrategia->politica->nombre}}</td>
                    <td>{{$estrategia->nombre}}</td>
                    <td>{{$estrategia->peso}}</td>
                    <td>{{$estrategia->descripcion}}</td>
                    
                  
                    <td><a href="{{url('estrategias/'.$estrategia->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('estrategias/'.$estrategia->id)}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
@stop
