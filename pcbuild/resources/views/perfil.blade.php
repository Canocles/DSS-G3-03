@extends('master')
@section('title', 'Perfil')
@section('content')
<div class="container-principal">
    <div class="container">
		<div class"articulos-en-carrito">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div class="bloque-datos">
                        <div class="white-card-movile">
                            <div class="row">
                                <div class="col-xs-10">
										<strong>Datos de mi cuenta</strong>
                                </div>
                                <div class="col-xs-2 text-xs-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bloque-datos-detalle">
						<div class="white-card-movile">
							<div class="row">
							<form action="{{ route('modificar-usuario', Auth::user()->id) }}" class="form-perfil" method="POST">
								{{ csrf_field() }}
								<div class="col-xs-12 col-md-6 m-b-1">
									<label> Nombre </label>
									<input type="text" name="nombre" value="{{ Auth::user()->nombre }}" class="form-control"></input>
								</div>
								<div class="col-xs-12 col-md-6 m-b-1">
									<label> Apellidos </label>
									<input type="text" name="apellidos" value="{{ Auth::user()->apellidos }}" class="form-control"></input>
								</div>
								<div class="col-xs-12 col-md-6 m-b-1">
									<label> Email </label>
									<input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control"></input>
								</div>
								<div class="col-xs-12 col-md-6 m-b-1">
									<label> Fecha de Nacimiento </label>
									<input type="text" name="fecha" value="{{ Auth::user()->fechaNacimiento }}" class="form-control"></input>
								</div>
								<div class="col-xs-12">
									<button type="submit" class="btn btn-primary-outline pull-xs-right"> Guardar cambios</button>
								</div>
							</form>
							</div>
						</div>
                    </div>
					<div class="bloque-direccion">
                        <div class="white-card-movile m-t-3">
                            <div class="row">
                                <div class="col-xs-10">
									<strong>Dirección de envio y datos de contacto</strong>
                                </div>
                                <div class="col-xs-2 text-xs-right">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="bloque-direccion-detalle">
						<div class="white-card-movile m-b-5">
							<div class="row">
								<form action="{{ route('modificar-direccion', Auth::user()->id) }}" class="form-perfil" method="POST">
									{{ csrf_field() }}
									<div class="col-xs-12 col-md-6 m-b-1">
										<label> Dirección </label>
										<input type="text" name="direccion" value="{{ Auth::user()->direccion }}" class="form-control"></input>
									</div>
									<div class="col-xs-12 col-md-6 m-b-1">
										<label> Teléfono </label>
										<input type="tel" name="telefono" value="{{ Auth::user()->telefono }}" class="form-control"></input>
									</div>
									<div class="col-xs-12">
										<button type="submit" class="btn btn-primary-outline pull-xs-right"> Guardar cambios</button>
									</div>
								</form>
							</div>
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