@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de unidades de medida</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('medidas.create')}}">Crear Unidades de Medidas</a>
        </div>
    @php
        $heads = [
        'ID',
        'Unidad de Medida',
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($medidas as $medida)
                <tr>
                    <td>{{$medida->id}}</td>
                    <td>{{$medida->nombre}}</td>
                   
                    <td><a href="{{url('medidas/'.$medida->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('medidas/'.$medida->id)}}">
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
