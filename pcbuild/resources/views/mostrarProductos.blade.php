@extends('layout')
@section('title', 'Productos')
@section('content')
    @section('content2')
    <h2 class="title text-center">Productos</h2>
    <table class="table table-collapsed table-condensed">
        <tr>
            <th>Producto</th>
            <th></th>
            <th>Precio 
            @if ($orden == 'desc')
                <a href="{{ action('ProductosController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort-asc"></i></a></th>
            @elseif ($orden == 'asc')
                <a href="{{ action('ProductosController@ordenar', ['orden' => 'desc']) }}"><i class="fa fa-sort-desc"></i></a></th>
            @else
                <a href="{{ action('ProductosController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort"></i></a></th>
            @endif
            <th></th>
            <th></th>
        </tr>
        @foreach($productos as $p)
            <tr>
                <td>
                    <a class="mostrar-producto" href="{{ url('/productos/ver_producto/'.$p->id )}}"><img src="{{ asset($p->urlImagen) }}" alt=""></a>
                </td>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->precio }} €</td>
                <td><a href="{{ action('ProductosController@delete', $p->id) }}"><i class="fa fa-trash-o"></a></td>
                <td><a href="{{ route('admin/productos/modificar', $p->id) }}"><i class="fa fa-pencil"></a></td>
            </tr>
        @endforeach
        <tr>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ asset('admin/productos/anadir') }} "><i class="fa fa-plus"></i>Añadir Producto</a></li>
                </ul>
            </div>
        </tr>
    </table>
    <div style="text-align:center;"> {{$productos->links()}} </div>
    @endsection
@endsection