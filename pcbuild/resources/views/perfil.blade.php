@extends('master')
@section('title', 'Perfil')
@section('content')
<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Perfil de<strong> {{Auth::user()->nombre}}</strong></h2>    			    				    				
					
				</div>	
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">Datos personales</h3>
							</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">Nombre: {{Auth::user()->nombre}}</li>
									<li class="list-group-item">Apellidos: {{Auth::user()->apellidos}}</li>
									<li class="list-group-item">Email: {{Auth::user()->email}}</li>
									<li class="list-group-item">Teléfono: {{Auth::user()->telefono}}</li>
									<li class="list-group-item">Fecha de nacimiento: {{Auth::user()->fechaNacimiento}}</li>
									<li class="list-group-item">Dirección: {{Auth::user()->direccion}}</li>
								</ul>
							</div>
						</div>	
					</div>
				</div>		 		
			</div>    	
    		
    	</div>	
    </div>
@endsection