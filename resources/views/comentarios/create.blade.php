@extends('layouts.app')

@section('content')
<h1>Comentario</h1>
@if( session()->has('info'))
<h3>{{ session('info') }}</h3>
@else
@include('comentarios.create-form')
@endif
@endsection