@extends('layouts.app')

@section('content')
@if( session()->has('info'))
<div class="alert alert-dark" role="alert">{{ session('info') }}</div>
@endif
<h1>Usuarios</h1>
<div class="table-responsive">

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th></th>
        </thead>
        
        @foreach ($users as $user)
        <tbody>
            <tr>
                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->id }}</a></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->nombre }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary inline">Editar</a>
                    <form action="{{ route('users.destroy', $user) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit"  class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        </tbody>
            
            
            @endforeach
    </table>
</div>


@endsection