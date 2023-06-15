@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Politicas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('politica.create')}}">Crear Politica</a>
        </div>
    @php
        $heads = [
        'ID',
        'Hecho',
        'Nombre',
        'Peso',
        'Descripción',
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($politicas as $politica)
                <tr>
                    <td>{{$politica->id}}</td>
                    <td>{{$politica->hechos->nombre}}</td>
                    <td>{{$politica->nombre}}</td>
                    <td>{{$politica->peso}}</td>
                    <td>{{$politica->descripcion}}</td>
                    
                  
                    <td><a href="{{url('politica/'.$politica->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('politica/'.$politica->id)}}">
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
