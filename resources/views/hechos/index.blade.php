@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Hechos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('hechos.create')}}">Crear Hechos</a>
        </div>
    @php
        $heads = [
        'ID',
        'Nombre',
        'Peso',
        'Descripción',
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($hechos as $hecho)
                <tr>
                    <td>{{$hecho->id}}</td>
                    <td>{{$hecho->nombre}}</td>
                    <td>{{$hecho->peso}}</td>
                    <td>{{$hecho->descripcion}}</td>
                    
                  
                    <td><a href="{{url('hechos/'.$hecho->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('hechos/'.$hecho->id)}}">
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
