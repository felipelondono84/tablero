@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Rol</h1>
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


          {!!Form::model($role,['route' => ['admin.roles.update', $role],'method' => 'put'])!!}

          <div class="form-group">
             {!!Form::label('name', 'Nombre:')!!}
             {!!Form::text('name', null, ['class' => 'form-control'])!!}
          </div>

          <strong>Permisos</strong>

            @foreach ($permissions as $permission)
            <div>
                <label>
                    {!!Form::checkbox('permissions[]',$permission->id, null, ['class' => 'mr-1'])!!}
                    {{$permission->name}}
                </label>
            </div>

            @endforeach

            {!!Form::submit('Editar Rol',['class' => 'btn btn-primary mt-2'])!!}

        {!!Form::close()!!}

        {{-- <form action="{{route('admin.roles.edit'.$role)}}" method="post">
            @method("PUT")
            @csrf

            <div>
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{$permissions->name}}" required>

                    </div>
            
            </div> --}}

            {{-- <strong>Permisos</strong>

            @foreach ($permissions as $permission)
                
            <div class="form-check">
                <input class="form-check-input big-checkbox" name="permissions[]" type="checkbox" value="{{$permission->name}}" id="defaultCheck1">
                {{$permission->name}}
            </div>
                      
                
            @endforeach --}}


        
            {{-- <a href="{{url('role')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Crear Rol</button> --}}
        
        </form>
    </div>
</div>
@stop
