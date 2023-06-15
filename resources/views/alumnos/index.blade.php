@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Alumnos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        @php
            
        
            $heads = [
            'ID',
            'Matricula',
            'Nombre',
            'Fecha',
            'Telefono',
            'Email',
            'Nivel',
            '',
            '',
        ];
        @endphp
            <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->matricula}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->fecha_nacimiento}}</td>
                        <td>{{$alumno->telefono}}</td>
                        <td>{{$alumno->email}}</td>
                        <td>{{$alumno->nivel->nombre}}</td>
                        <td><a href="{{url('alumnos/'.$alumno->id.'/edit')}}" class="btn btn-warning btn-sm"</a>Editar</td>
                        <td>
                            <form action="{{url('alumnos/'.$alumno->id)}}">
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
