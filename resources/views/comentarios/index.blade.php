@extends('layouts.app')

@section('content')
<h1>Index</h1>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Autor</th>
        <th>Correo</th>
        <th>Contenido</th>
        <th></th>
    </thead>

    @foreach ($comentarios as $comentario)
    <tbody>
        <tr>
            <td><a href="{{ route('comentarios.show', $comentario->id) }}">{{ $comentario->id }}</a></td>
            <td>{{ $comentario->nombre }}</td>
            <td>{{ $comentario->email }}</td>
            <td>{{ $comentario->contenido }}</td>
            <td>
                <a href="{{ route('comentarios.edit', $comentario->id) }}" class="btn btn-primary inline">Editar</a>
                <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit"  class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    </tbody>
    
    
    @endforeach
</table>


@endsection