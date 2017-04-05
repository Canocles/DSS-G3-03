@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Pedidos</h2>
        <table class="table table-collapsed table-condensed">
            <tr>
                <th>Pedido</th>
                <th>Fecha</th> 
                <th>Usuario</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->fecha }}</td>
                    <td>{{ $pedido->user->email }}</td>
                    <td><a href="{{ route('admin/pedidos/pedido', $pedido->id) }}"><i class="fa fa-eye"></i></a></td>
                    <td><a href="{{ action('PedidosController@delete', $pedido->id) }}"><i class="fa fa-trash-o"></a></td>
                    <td><a href="{{ route('admin/pedidos/modificar', $pedido->id) }}"><i class="fa fa-pencil"></a></td>
                </tr>
            @endforeach
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="{{ asset('admin/pedidos/anadir') }}"><i class="fa fa-plus"></i>Añadir Pedido</a></li>
                </ul>
            </div>
        </tr>
        </table>
        <div style="text-align:center;"> {{$pedidos->links()}} </div>
    @endsection
@endsection