@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de dependencias</h1>
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
        'Nombre',
        'Descripcion',
        'Mision',
        'Vision',
        'Informacion',
        'Organigrama',
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($dependencias as $dependencia)
                <tr>
                    <td>{{$dependencia->id}}</td>
                    <td>{{$dependencia->nombre}}</td>
                    <td>{{$dependencia->descripcion}}</td>
                    <td>{{$dependencia->mision}}</td>
                    <td>{{$dependencia->vision}}</td>
                    <td>{{$dependencia->info}}</td>
                    <td>{{$dependencia->organigrama}}</td>
                    <td><a href="{{url('dependencia/'.$dependencia->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    <td>
                        <form action="{{url('dependencia/'.$dependencia->id)}}">
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
