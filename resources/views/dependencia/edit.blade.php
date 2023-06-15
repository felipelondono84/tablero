@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Dependencia</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Editar Dependencia</h2>

            <form action="{{url('dependencia/'.$dependencia->id)}}" method="post">
                @method("PUT")
                @csrf
                    <div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$dependencia->nombre}}" required>
    
                            </div>
                    
                    </div>
    
                    <div>
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$dependencia->descripcion}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="mision" class="col-sm-2 col-form-label">Mision:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="mision" id="mision" value="{{$dependencia->mision}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="vision" class="col-sm-2 col-form-label">Vision:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="vision" id="vision" value="{{$dependencia->vision}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="info" class="col-sm-2 col-form-label">Info:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="info" id="info" value="{{$dependencia->info}}">
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="organigrama" class="col-sm-2 col-form-label">Organigrama:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="organigrama" id="organigrama" value="{{$dependencia->organigrama}}">
    
                            </div>
                    
                    </div><br>
                    <a href="{{url('dependencia')}}" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                
                </form>
    
            
            </form>
        </div>
    </div>
@stop