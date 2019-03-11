@extends('layouts.app')

@section('content')
<h1>Editar</h1>
<form action="{{ action('UserController@update', $user)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group form-inline">
        <label for="name" class="col-sm-2">Nombre</label>
        <input type="text" name="name" class="form-control col-sm-10" value="{{ $user->name }}">
    </div>
    <div class="form-group form-inline">
        <label for="email" class="col-sm-2">Correo</label>
        <input type="text" name="email" class="form-control col-sm-10" value="{{ $user->email }}">
    </div>
    <div class="form-group form-inline">
        <label for="password" class="col-sm-2">Contraseña</label>
        <input type="password" name="password" class="form-control col-sm-10" placeholder="Contraseña nueva">
    </div>
    <button type="submit" class="btn btn-primary col-sm-2 offset-sm-2">Enviar</button>
    <a href="{{ route('users.index') }}" class="btn btn-danger col-sm-2">Cancelar</a>
</form>
@endsection