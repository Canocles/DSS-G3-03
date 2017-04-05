<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Menú</h2>
                <div class="panel-group category-products" id="accordian">
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/productos') }}">Mostrar Productos</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/usuarios') }}">Mostrar Usuarios</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/categorias') }}">Mostrar Categorías</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/pedidos') }}">Mostrar Pedidos</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ asset('admin/linpedidos') }}">Mostrar Líneas de Pedidos</a></h4>
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