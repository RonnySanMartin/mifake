@extends('layouts.app')

@section('content')
<h1>Contacto</h1>
@if( session()->has('info'))
<h3>{{ session('info') }}</h3>
@else
<form action="{{ action('UserController@store')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group form-inline">
        <label class="col-sm-2"  for="texto">Comentario</label>
        <textarea class="form-control col-sm-10" name="texto" rows="3" placeholder="comentario" required>{{ old('texto') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary col-sm-2 offset-sm-2">Enviar</button>
</form>
@endif
@endsection