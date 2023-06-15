@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Registrar Programas</h2>

            <form action="{{url('programas')}}" method="post">
                @csrf
                    <div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="peso" class="col-sm-2 col-form-label">Peso:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="peso" id="peso" value="{{old('peso')}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{old('descripcion')}}" required>
    
                            </div>
                    
                    </div>
                    
                    <div>
                        <label for="hechos" class="col-sm-2 col-form-label">Hechos:</label>
                            <div class="col-sm-5">
                                <select name="hechos" id="hechos" class="form-control" required>
                                    <option value="">Seleccionar Hecho:</option>
                                    @foreach ($hechos as $hecho)
                                    <option value="{{$hecho->id}}">{{$hecho->nombre}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                    
                    </div> 
                    <div>
                        <label for="politicas" class="col-sm-2 col-form-label">Politicas:</label>
                            <div class="col-sm-5">
                                <select name="politicas" id="politicas" class="form-control" required>
                                    <option value="">Seleccionar Politicas:</option>
                                    @foreach ($politicas as $politica)
                                    <option value="{{$politica->id}}">{{$politica->nombre}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                    
                    </div><br>  
                    {{-- <div>
                        <label for="estrategias" class="col-sm-2 col-form-label">Estrategias:</label>
                            <div class="col-sm-5">
                                <select name="estrategias" id="estrategias" class="form-control" required>
                                    <option value="">Seleccionar Estrategias:</option>
                                    @foreach ($estrategias as $estrategia)
                                    <option value="{{$estrategia->id}}">{{$estrategia->nombre}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                    
                    </div><br>    --}}
                    
                    
                    <a href="{{url('programa')}}" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                
                </form>
    
            
            </form>
        </div>
    </div>
@stop