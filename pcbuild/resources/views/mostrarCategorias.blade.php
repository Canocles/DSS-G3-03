@extends('layout')
@section('title', 'Categorias')
@section('content')
    @section('content2')
    <h2 class="title text-center">Categorías</h2>
        <table class="table table-collapsed table-condensed">
            <tr>
                <th>Nombre
                @if ($orden == 'desc')
                    <a href="{{ action('CategoriasController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort-asc"></i></a></th>
                @elseif ($orden == 'asc')
                    <a href="{{ action('CategoriasController@ordenar', ['orden' => 'desc']) }}"><i class="fa fa-sort-desc"></i></a></th>
                @else
                    <a href="{{ action('CategoriasController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort"></i></a></th>
                @endif
                <th>Descripcion</th> 
                <th></th>
                <th></th>
            </tr>
            @foreach($categorias as $cat)
                <tr>
                    <td>{{ $cat->nombre }}</td>
                    <td>{{ $cat->descripcion }}</td>
                    <td><a href="{{ action('CategoriasController@delete', $cat->id) }}"><i class="fa fa-trash-o"></a></td>
                    <td><a href="{{ route('admin/categorias/modificar', $cat->id) }}"><i class="fa fa-pencil"></a></td>
                </tr>
            @endforeach
            <tr>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ asset('admin/categorias/anadir') }}"><i class="fa fa-plus"></i>Añadir Categoría</a></li>
                </ul>
            </div>
        </tr>
        </table>
        <div style="text-align:center;"> {{$categorias->links()}} </div>
    @endsection
@endsection