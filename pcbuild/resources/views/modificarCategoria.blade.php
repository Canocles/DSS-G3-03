@include('header')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Modificar Categoría</h2>
                    <div class="login-form"><!--login form-->
                                    
                    <form action="#" method="post"><!--en action=" aqui va la ruta del formulario a la accion del controlador"-->
                        <input type="text" placeholder="Nombre" />
                        <input type="text" placeholder="Descripción" />

                        <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                    </div><!--/login form-->
                    </div>
            </div>
        </div>
    </div>
</section>
@extends('footer')