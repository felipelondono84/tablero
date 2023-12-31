@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="h5">Nombre</h1>
            <p class="form-control">{{$user->name}}</p>
           
            <h1 class="h5">Lista de roles</h1>
            {!!Form::model($user,['route' => ['admin.users.update', $user], 'method' => 'put'])!!}
            <div>
                @foreach ($roles as $role)
                    <label>
                        {!!Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1'])!!}
                        {{{$role->name}}}
                    </label>
            </div>        
                @endforeach
            {!!Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2'])!!}        

            {!!Form::close()!!}
        </div>
    </div>
@stop
