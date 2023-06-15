@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Crear Nuevo Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
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


            <form action="{{route('admin.roles.store')}}" method="post">
                
                @csrf

                <div>
                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" required>

                        </div>
                
                </div>

                <strong>Permisos</strong>

                @foreach ($permissions as $permission)
                    
                <div class="form-check">
                    <input class="form-check-input big-checkbox" name="permissions[]" type="checkbox" value="{{$permission->id}}" id="defaultCheck1">
                    {{$permission->name}}
                </div>
                          
                    
                @endforeach


                {{-- <div>
                    <label for="fecha" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="fecha" id="fecha" value="{{old('fecha')}}" required>

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
                
                </div> --}}
                <a href="{{url('role')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Crear Rol</button>
            
            </form>
        </div>
    </div>
@stop
