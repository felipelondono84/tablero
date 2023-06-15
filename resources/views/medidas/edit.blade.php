@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Modificar Unidades de Medida</h2>

            <form action="{{url('medidas/'.$medidas->id)}}" method="post">
                @method("PUT")
                @csrf
                    <div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$medidas->nombre}}" required>
    
                            </div>
                    
                    </div><br>
    
                    
                    <a href="{{url('medidas')}}" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                
            
    
            
            </form>
        </div>
    </div>
@stop