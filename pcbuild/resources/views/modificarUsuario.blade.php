@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Usuario</h2>
    <table class="table table-collapsed table-condensed">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th></th>
        </tr>
        @foreach($usuarios as $usu)
        <tr>
            <td>{{ $usu->nombre }}</td>
            <td>{{ $usu->apellidos }}</td>
            <td>{{ $usu->email }}</td>
            <td><a href="{{ route('admin/modificar/usuario', $usu->id) }}">Modificar</a></td>
        </tr>
        @endforeach
    </table>
    @endsection
@endsection