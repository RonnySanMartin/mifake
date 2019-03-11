@extends('layouts.app')

@section('content')
<h1>Editar</h1>
<form action="{{ action('ComentarioController@update', $comentario)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group form-inline">
        <label class="col-sm-2"  for="texto">Comentario</label>
        <textarea class="form-control col-sm-10" name="texto" rows="3" placeholder="comentario" required >{{ $comentario->contenido }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary col-sm-2 offset-sm-2">Enviar</button>
    <a href="{{ route('comentarios.index') }}" class="btn btn-danger col-sm-2">Cancelar</a>
</form>
@endsection