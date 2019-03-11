@extends('layouts.app')

@section('content')
<h1>Comentario de {{ $comentario->user->name }}</h1>
<p>{{ $comentario->user->email }}</p>
<p>{{ $comentario->contenido }}</p>
<a href="{{ route('comentarios.edit', $comentario->id) }}" class="btn btn-primary col-sm-2">Editar</a>

@endsection