@extends('layout')
@section('title', 'Líneas de Pedidos')
@section('content')
    @section('content2')
    <h2 class="title text-center">Líneas de Pedido</h2>
        <table class="table table-collapsed table-condensed">
            <tr>
                <th> ID
                @if ($orden == 'desc')
                    <a href="{{ action('Lin IDsController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort-asc"></i></a></th>
                @elseif ($orden == 'asc')
                    <a href="{{ action('LinPedidosController@ordenar', ['orden' => 'desc']) }}"><i class="fa fa-sort-desc"></i></a></th>
                @else
                    <a href="{{ action('LinPedidosController@ordenar', ['orden' => 'asc']) }}"><i class="fa fa-sort"></i></a></th>
                @endif
                <th>Producto</th>
                <th></th>
                <th>Cantidad</th> 
                <th>Total Línea</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($linpedidos as $linpedido)
                <tr>
                    <td>{{ $linpedido->pedido_id }}</td>
                    <td>
                        <a class="mostrar-producto" href="{{ url('/productos/ver_producto/'.$linpedido->producto->id )}}"><img src="{{ asset($linpedido->producto->urlImagen) }}" alt=""></a>
                    </td>
                    <td>{{ $linpedido->producto->nombre }}</td>
                    <td>{{ $linpedido->cantidad }}</td>
                    <td>{{ $linpedido->cantidad * $linpedido->producto->precio}} €</td>
                    <td><a href="{{ action('LinPedidosController@delete', [$linpedido->num, $linpedido->pedido_id]) }}"><i class="fa fa-trash-o"></a></td>
                    <td><a href="{{ route('admin/linpedidos/modificar', [$linpedido->num, $linpedido->pedido_id]) }}"><i class="fa fa-pencil"></a></td>
                </tr>
            @endforeach
            <tr>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ asset('admin/linpedidos/anadir') }}"><i class="fa fa-plus"></i>Añadir Linea de Pedido</a></li>
                </ul>
            </div>
        </tr>
        </table>
        <div style="text-align:center;"> {{$linpedidos->links()}} </div>
    @endsection
@endsection