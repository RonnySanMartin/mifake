@extends('layouts.app')

@section('content')

<h1>Datos de {{ $user->name }}</h1>
<hr>
<p><b>Nombre:</b> {{ $user->name }}</p>
<p><b>Correo:</b> {{ $user->email }}</p>
<p><b>Rol:</b> {{ $user->role->descripcion }}</p>
<hr>

<a href="{{ route('users.edit', $user) }}" class="btn btn-primary col-sm-2">Editar</a>

@endsection