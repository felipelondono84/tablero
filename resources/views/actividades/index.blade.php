@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Actividades</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('dependencia.create')}}">Crear Dependencia</a>
        </div>
    @php
        $heads = [
        'ID',
        'Meta Alcanzada',
        'Actividad',
        'Tipo Evidencia',
        
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($actividades as $actividad)
                <tr>
                    <td>{{$actividad->id}}</td>
                    <td>{{$actividad->nombre}}</td>
                    <td>{{$actividad->descripcion}}</td>
                    <td>{{$actividad->mision}}</td>
                    <td>{{$actividad->vision}}</td>
                    <td>{{$actividad->info}}</td>
                    <td>{{$actividad->organigrama}}</td>
                    <td><a href="{{url('actividades/'.$actividad->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('actividades/'.$actividad->id)}}">
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
