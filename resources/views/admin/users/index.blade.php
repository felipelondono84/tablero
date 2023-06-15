@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Usuarios</h1>
@stop

@section('content')
    @livewire('admin-users')
@stop
