@extends('layout')
@section('title', 'Usuarios')
@section('content')
    @section('content2')
    <h2 class="title text-center">Usuarios</h2>
    <table class="table table-collapsed table-condensed">
        <tr>
            <th>Nombre
            @if ($orden == 'desc')
                <a href="{{ action('UsuariosController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort-asc"></i></a></th>
            @elseif ($orden == 'asc')
                <a href="{{ action('UsuariosController@ordenar', ['orden' => 'desc']) }}"><i class="fa fa-sort-desc"></i></a></th>
            @else
                <a href="{{ action('UsuariosController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort"></i></a></th>
            @endif
            <th>Apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Fecha nac</th>
            <th>Dirección</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($usuarios as $usu)
            <tr>
                <td>{{ $usu->nombre }}</td>
                <td>{{ $usu->apellidos }}</td>
                <td>{{ $usu->email }}</td>
                <td>{{ $usu->telefono }}</td>
                <td>{{ $usu->fechaNacimiento }}</td>
                <td>{{ $usu->direccion }}</td>
                <td><a href="{{ action('UsuariosController@delete', $usu->id) }}"><i class="fa fa-trash-o"></a></td>
                <td><a href="{{ route('admin/usuarios/modificar', $usu->id) }}"><i class="fa fa-pencil"></a></td>
            </tr>
        @endforeach
        <tr>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ asset('admin/usuarios/anadir') }}"><i class="fa fa-plus"></i>Añadir Usuario</a></li>
                </ul>
            </div>
        </tr>
    </table>
    <div style="text-align:center;"> {{$usuarios->links()}} </div>
    @endsection
@endsection