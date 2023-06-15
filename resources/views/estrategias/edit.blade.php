@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Editar Politica</h1> --}}
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Editar Estrategias</h2>

            <form action="{{url('estrategias/'.$estrategias->id)}}" method="post">
                @method("PUT")
                @csrf
                    <div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$estrategias->nombre}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="peso" class="col-sm-2 col-form-label">Peso:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="peso" id="peso" value="{{$estrategias->peso}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$estrategias->descripcion}}" required>
    
                            </div>
                    
                    </div>

                    <div>
                        <label for="hechos" class="col-sm-2 col-form-label">Hechos:</label>
                            <div class="col-sm-5">
                                <select name="hechos" id="hechos" class="form-control" required>
                                    <option value="">Seleccionar Hecho:</option>
                                    @foreach ($hechos as $hecho)
                                    
                                    <option value="{{$hecho->id}}" @if ($hecho->id == $estrategias->hechos_id) {{'selected'}} @endif>{{$hecho->nombre}}</option>    
                                    @endforeach
                                </select>
                            </div>
                    
                    </div>
                    <div>
                        <label for="politica" class="col-sm-2 col-form-label">Politicas:</label>
                            <div class="col-sm-5">
                                <select name="politica" id="politica" class="form-control" required>
                                    <option value="">Seleccionar programas:</option>
                                    @foreach ($politicas as $politica)
                                    
                                    <option value="{{$politica->id}}" @if ($politica->id == $estrategias->politica_id) {{'selected'}} @endif>{{$politica->nombre}}</option>    
                                    @endforeach
                                </select>
                            </div>
                    
                    </div>
                    <br>  
                       
                    
                    
                    
                    <a href="{{url('estrategias')}}" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                
                </form>
    
            
            </form>
        </div>
    </div>
@stop