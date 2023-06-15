@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Registrar Metas</h2>
            <hr style="height:1px;border:none;color:#333;background-color:#333;" />

            
            <form action="{{url('metas')}}" method="post">
                @csrf
                
                    <div class="row">
                      <div class="col">
                          


                        <label for="codigo_meta">Codigo Meta</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="codigo_meta" id="codigo_meta" value="{{old('codigo_meta')}}" required>

                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="nombre">Nombre Meta</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="indicador">Indicador:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="indicador" id="indicador" value="{{old('indicador')}}" required>
    
                            </div>
                    
                    </div>

                </div><br>
                <hr />
                <div class="row">
                    <div class="col">
                        <label for="peso" class="col-sm col-form-label">Peso Meta(%):</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="peso" id="peso" value="{{old('peso')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                    
                        <label for="tipo_indicador" class="col-sm col-form-label">Tipo Indicador:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="tipo_indicador" id="tipo_indicador" value="{{old('tipo_indicador')}}" required>
    
                            </div>
                    
                    </div>
                </div>    
                <div class="row">
                    <div class="col">
                        <label for="linea" class="col-sm col-form-label">Linea base:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="linea" id="linea" value="{{old('linea')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="ano" class="col-sm col-form-label">Año:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ano" id="ano" value="{{old('ano')}}" required>
    
                            </div>
                    
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="col">
                        <label for="meta1" class="col-sm col-form-label">Meta Año 1:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="meta1" id="meta1" value="{{old('meta1')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="meta2" class="col-sm col-form-label">Meta Año 2:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="meta2" id="meta2" value="{{old('meta2')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="meta3" class="col-sm col-form-label">Meta Año 3:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="meta3" id="meta3" value="{{old('meta3')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="meta4" class="col-sm col-form-label">Meta Año 4:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="meta4" id="meta4" value="{{old('meta4')}}" required>
    
                            </div>
                    
                    </div>

                    <div>
                        <label for="metatotal" class="col-sm col-form-label">Meta cuatrenio:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="metatotal" id="metatotal" value="{{old('metatotal')}}" required>
    
                            </div>
                    
                    </div>
                </div>  <br><br>
                <hr>
                {{-- <hr style="height:1px;border:none;color:rgb(190, 185, 185);background-color:rgb(170, 167, 167);" />   --}}
                <div class="row">
                    <div class="col">
                        <label for="recurso1" class="col-sm col-form-label">Recurso Año 1:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="recurso1" id="recurso1" value="{{old('recurso1')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="recurso2" class="col-sm col-form-label">Recurso Año 2:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="recurso2" id="recurso2" value="{{old('recurso2')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="recurso3" class="col-sm col-form-label">Recurso Año 3:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="recurso3" id="recurso3" value="{{old('recurso3')}}" required>
    
                            </div>
                    
                    </div>
                    <div class="col">
                        <label for="recurso4" class="col-sm col-form-label">Recurso Año 4:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="recurso4" id="recurso4" value="{{old('recurso4')}}" required>
    
                            </div>
                    
                    </div>

                    <div class="col">
                        <label for="recursototal" class="col-sm col-form-label">Meta cuatrenio:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="recursototal" id="recursototal" value="{{old('recursototal')}}" required>
    
                            </div>
                    
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
                    <div>
                        <label for="estrategia" class="col-sm-2 col-form-label">Estrategia:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="estrategia" id="estrategia" value="{{old('estrategia')}}" required>
    
                            </div>
                    
                    </div>
                    <div>
                        <label for="programa" class="col-sm-2 col-form-label">Programa:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="programa" id="programa" value="{{old('programa')}}" required>
    
                            </div>
                    
                    </div><br>
                    {{-- <div>
                        <label for="estrategia" class="col-sm-2 col-form-label">Estrategias:</label>
                            <div class="col-sm-5">
                                <select name="estrategia" id="estrategia" class="form-control" required>
                                    <option value="">Seleccionar Estrategias:</option>
                                    @foreach ($estrategias as $estrategia)
                                    <option value="{{$estrategia->id}}">{{$estrategia->nombre}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                    
                    </div><br>    --}}
                    {{-- <div>
                        <label for="programa" class="col-sm-2 col-form-label">Programas:</label>
                            <div class="col-sm-5">
                                <select name="estrategias" id="estrategias" class="form-control" required>
                                    <option value="">Seleccionar Programa:</option>
                                    @foreach ($programas as $programa)
                                    <option value="{{$programa->id}}">{{$programa->nombre}}</option>
                                        
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