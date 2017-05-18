@extends('master')
@section('title', 'Carrito')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
            <li><a href="/">Inicio</a></li>
            <li class="active">Carrito de compra</li>
            </ol>
        </div>
        <section id="do_action">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-lg-8">
                        <a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ route('carrito-trash') }}"><i class="fa fa-trash-o"></i> Vaciar carrito</a>
                        <div class="chose_area">
                            <ul class="numero_articulos">
                                <div class="h3 m-b-1">
                                    <strong>({{ $cantidadTotal }})</strong>
                                    Artículos en
                                    <strong>tu cesta</strong>
                                </div>
                            </ul>
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
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($carrito as $item)
                                                <tr>
                                                    <td class="cart_product">
                                                        <a href=""><img src="{{ asset($item->urlImagen) }}" alt=""></a>
                                                    </td>
                                                    <td class="cart_description">
                                                        <h4><a href="">{{ $item->nombre }}</a></h4>
                                                        <p>Web ID: {{ $item->id }}</p>
                                                    </td>
                                                    <td class="cart_price">
                                                        <p>{{ $item->precio }} €</p>
                                                    </td>
                                                    <td class="cart_quantity">
                                                        <div class="cart_quantity_button">
                                                             <form action="{{ route('carrito-update', $item->id) }}" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="number" name="cantidad" min="1" max="50" value="{{ $item->cantidad }}" />
                                                                <button type="submit" class="btn btn-warning"><i class="fa fa-refresh"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td class="cart_total">
                                                        <p class="cart_total_price">${{ $totalLinea = number_format($item->precio * $item->cantidad,2) }} €</p>
                                                    </td>
                                                    <td class="cart_delete">
                                                        <a href="{{ route('carrito-delete', $item->id) }}" class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="/">Seguir Comprando</a>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="total_area">
                            <ul>
                                <li>Gastos de envio estimados: <span>{{ $precioTotal * 1.5 / 100 }} €</span></li>
                                <li><strong>Total </strong><span>{{ $precioTotal }} €</span></li>
                            </ul>
                        </div>
                        <a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="{{ route('carrito-to-pedido') }}">Realizar Pedido</a>
                    </div>
                </div>
            </div>
            </section>
        </div>
	</section> <!--/#cart_items-->
@endsection