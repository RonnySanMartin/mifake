@extends('layouts.app')

@section('content')
@if( session()->has('info'))
<div class="alert alert-dark" role="alert">{{ session('info') }}</div>
@endif
<h1>Fotos</h1>
<div>
    @foreach ($fotos as $foto)
    <div class="card mx-auto mb-5" style="max-width: 800px">
        <div class="card-header">
            {{ $foto->user->name }}
        </div>
        <img class="card-img-top" src="{{ $foto->ruta }}" alt="Card image cap">

        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
            @foreach ($foto->comentarios as $comentario)
            <p><b>{{$comentario->user->name}}</b> {{ $comentario->contenido }}</p>
            @endforeach
            @include('comentarios.create-form', [
                'foto_id' => $foto->id,
                'status_id' => 1,
            ])
            
        </div>
    </div>
    @endforeach
    {{ $fotos->links() }}
</div>
{{-- <home-fotos-component></home-fotos-component> --}}

@endsection