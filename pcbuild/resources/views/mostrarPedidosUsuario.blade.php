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
										<strong>Pedidos</strong>
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
                                    <th>Nº Pedido</th>
                                    <th>Fecha</th>
                                    <th>Artículos</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                @foreach($pedidos as $pedido)
                                    <tr>
                                        <td>{{ $pedido->id }}</td>
                                        <td>{{ $pedido->fecha }}</td>
                                        <td>{{ $pedido->cantidad }}</td>
                                        <td>{{ $pedido->total }} €</td>
                                        <td><a href="{{ route('mostrar-linpedidos', $pedido->id) }}"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            </tr>
                            </table>
                            <div style="text-align:center;"> {{$pedidos->links()}} </div>
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