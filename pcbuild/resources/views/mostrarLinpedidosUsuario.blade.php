@extends('master')
@section('title', 'Perfil')
@section('content')
<section id="cart_items">
    <div class="container">
		<div class"articulos-en-carrito">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-lg-9">
                    <div class="bloque-linpedidos">
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
                    <div class="bloque-linpedidos-detalle">
                        <section id="do_action">
                            <div class="chose_area">
                                <ul class="table_cesta">
                                    <div class="table-cart">
                                        <div class="table-responsive cart_info">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr class="cart_menu">
                                                        <td class="image">Artículo</td>
                                                        <td class="name"></td>
                                                        <td class="price">Precio</td>
                                                        <td class="quantity">Unidades</td>
                                                        <td class="total">Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($linpedidos as $linpedido)
                                                    <tr>
                                                        <td class="cart_product">
                                                            <a href="{{ url('/productos/ver_producto/'.$linpedido->producto->id )}}"><img src="{{ asset($linpedido->producto->urlImagen) }}" alt=""></a>
                                                        </td>
                                                        <td class="cart_description">
                                                            <h4><a href="">{{ $linpedido->producto->nombre }}</a></h4>
                                                            <p>Web ID: {{ $linpedido->producto->id }}</p>
                                                        </td>
                                                        <td class="cart_price">
                                                            <p>{{ $linpedido->producto->precio }} €</p>
                                                        </td>
                                                        <td class="cart_quantity">
                                                            <p>{{ $linpedido->cantidad }}</p>
                                                        </td>
                                                        <td class="cart_total">
                                                            <p class="cart_total_price">${{ $totalLinea = number_format($linpedido->producto->precio * $linpedido->cantidad,2) }} €</p>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    <div class="bloque-confirmacion">
						<a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ URL::asset('/perfil') }}">Mis datos</a>
						<a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ route('pedidos-user', Auth::user()->id) }}">Mis Pedidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection