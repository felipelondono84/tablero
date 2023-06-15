@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Metas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{$msg}}</h2>
            <a href="{{url('metas')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    
@stop
