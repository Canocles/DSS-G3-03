@extends('master')
@section('title', 'Producto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Categoría</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                @foreach($categorias as $cat)
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ route('/', $cat->nombre) }}">{{$cat->nombre}}</a></h4>
                        </div>        
                    </div>
                @endforeach
                </div><!--/category-products-->
            </div>
        </div>

		<div class="col-sm-9 padding-right">
			<div class="product-details"><!--product-details-->
				<div class="col-sm-5">
					<div class="view-product">
						<img src="{{ asset($producto->urlImagen) }}" alt="" />
						<h3>ZOOM</h3>
					</div>
					<div id="similar-product" class="carousel slide" data-ride="carousel">
						
							<!-- Wrapper for slides -->
								<div class="carousel-inner">
								<div class="item active">
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
									<a href=""><img src="{{ asset($producto->urlImagen) }}" alt=""></a>
								</div>
								
							</div>

							<!-- Controls -->
							<a class="left item-control" href="#similar-product" data-slide="prev">
							<i class="fa fa-angle-left"></i>
							</a>
							<a class="right item-control" href="#similar-product" data-slide="next">
							<i class="fa fa-angle-right"></i>
							</a>
					</div>

				</div>
				<div class="col-sm-7">
					<div class="product-information"><!--/product-information-->
						<img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt="" />
						<h2>{{$producto->nombre}}</h2>
						<p>{{$producto->descripcion}}</p>
						<img src="{{ asset('images/product-details/rating.png') }}" alt="" />
						<span>
							<span>{{$producto->precio}}</span>
							<label>Cantidad:</label>
							<input type="text" value="1" />
							<button type="button" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Añadir al carrito
							</button>
						</span>
						<p><b>Disponibilidad:</b> In Stock</p>
						<p><b>Estado:</b> New</p>
						<p><b>Marca:</b> Pcbuild</p>
						<a href=""><img src="{{ asset('images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
					</div><!--/product-information-->
				</div>
			</div><!--/product-details-->
		</div>
	</div>
</div>
@endsection
