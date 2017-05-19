@extends('master')
@section('title', 'Perfil')
@section('content')
<div class="container-principal">
    <div class="container">
		<div class"articulos-en-carrito">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div class="bloque-pedidos">
                        <div class="white-card-movile">
                            <div class="row">
                                <div class="col-xs-10">
									<strong>Pedido Nº: {{ $idPedido }}</strong>
                                </div>
                                <div class="col-xs-2 text-xs-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bloque-pedidos-detalle">
						<div class="white-card-movile m-b-5">
                            <table class="table table-collapsed table-condensed">
                                <tr>
                                    <th>Pedido
                                    <th>Línea</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th> 
                                    <th>Total Línea</th>
                                </tr>
                                @foreach($linpedidos as $linpedido)
                                    <tr>
                                        <td>{{ $linpedido->pedido_id }}</td>
                                        <td>{{ $linpedido->num }}</td>
                                        <td>{{ $linpedido->producto->nombre }}</td>
                                        <td>{{ $linpedido->cantidad }}</td>
                                        <td>{{ $linpedido->cantidad * $linpedido->producto->precio}} €</td>
                                    </tr>
                                @endforeach
                                <tr>
                                </tr>
                                </table>
                            <div style="text-align:center;"> {{$linpedidos->links()}} </div>
						</div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="bloque-confirmacion">
						<a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ URL::asset('/perfil') }}">Mis datos</a>
						<a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ route('pedidos-user', Auth::user()->id) }}">Mis Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection