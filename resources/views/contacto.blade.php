@extends('partials._main')

@section('content')
<h1>Contacto</h1>
@if( session()->has('info'))
<h3>{{ session('info') }}</h3>
@else
<form action="contacto" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" value= "{{ old('email') }}">
      </div>
      <div class="form-group">
        <label for="testo">Example textarea</label>
        <textarea class="form-control" name="testo" rows="3" value= "{{ old('testo') }}"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endif
@endsection
