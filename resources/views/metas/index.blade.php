@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Metas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('metas.create')}}">Crear Metas</a>
        </div>
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('metas.create')}}">Crear Plan</a>
        </div>
    @php
        $heads = [
        'ID',
        'Nombre Meta',
        'Hecho',
        'Politica',
        
        'Peso',
        
        '',
        '',
    ];
    @endphp
        <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
            @foreach($metas as $meta)
                <tr>
                    <td>{{$meta->id}}</td>
                    <td>{{$meta->nombre}}</td>
                    <td>{{$meta->hechos->nombre}}</td>
                    <td>{{$meta->politica->nombre}}</td>
                    
                    <td>{{$meta->peso}}</td>
                    
                    
                  
                    <td><a href="{{url('metas/'.$meta->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                    {{-- <td>
                        <form action="{{url('metas/'.$meta->id)}}">
                            @method("DELETE")
                            @csrf
                            <a href="{{url('metas/'.$meta->id.'/edit')}}"><button type="submit" class="btn btn-success btn-sm"></a>Plan Indicativo</button>
                        </form>
                    </td> --}}
                    <td>
                        
                            <a href="{{url('metas/'.$meta->id.'/show')}}"><button type="submit" class="btn btn-success btn-sm"></button></a>Plan Indicativo
                        
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
@stop
