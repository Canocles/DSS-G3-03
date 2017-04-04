<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Menú</h2>
                <div class="panel-group category-products" id="accordian">
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/alta/producto') }}">Alta Producto</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/alta/usuario') }}">Alta Usuario</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/modificar/usuarios') }}">Modificar Usuarios</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/baja/usuario') }}">Baja Usuario</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/alta/categoria') }}">Alta Categoría</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/modificar/categorias') }}">Modificar Categorías</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/baja/categoria') }}">Baja Categoria</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                @yield('content2')
            </div>
        </div>
    </div>
</div>