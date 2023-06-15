@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Programas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('programas.create')}}">Crear Programa</a>
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
            @foreach($programas as $programa)
                <tr>
                    <td>{{$programa->id}}</td>
                    <td>{{$programa->hechos->nombre}}</td>
                    <td>{{$programa->politica->nombre}}</td>
                    <td>{{$programa->nombre}}</td>
                    <td>{{$programa->peso}}</td>
                    <td>{{$programa->descripcion}}</td>
                    
                  
                    <td><a href="{{url('programas/'.$programa->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('programas/'.$programa->id)}}">
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
