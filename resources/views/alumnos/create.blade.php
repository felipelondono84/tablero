@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Alumnos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Crear Alumnos</h2>

            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                        
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                
            @endif


            <form action="{{url('alumnos')}}" method="post">
                
                @csrf

                <div>
                    <label for="matricula" class="col-sm-2 col-form-label">Matricula</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="matricula" id="matricula" value="{{old('matricula')}}" required>

                        </div>
                
                </div>

                <div>
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>

                        </div>
                
                </div>
                <div>
                    <label for="fecha" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="fecha" id="fecha" value="{{old('fecha')}}" required>

                        </div>
                
                </div>
                <div>
                    <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="telefono" id="telefono" value="{{old('telefono')}}" required>

                        </div>
                
                </div>
                <div>
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}">

                        </div>
                
                </div>
                <div>
                    <label for="email" class="col-sm-2 col-form-label">Nivel:</label>
                        <div class="col-sm-5">
                            <select name="nivel" id="nivel" class="form-control" required>
                                <option value="">Seleccionar Nivel:</option>
                                @foreach ($niveles as $nivel)
                                <option value="{{$nivel->id}}">{{$nivel->nombre}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                
                </div>
                <a href="{{url('alumnos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            
            </form>

        </div>
    </div>
    
@stop
