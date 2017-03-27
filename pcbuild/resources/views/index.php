<?php 
include 'header.inc.php';
?>
<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">CPU</a></h4>
                                    </div>
                                    
                                </div>
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Tarjeta Gráfica</a></h4>
                                    </div>
                                </div>

                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Torres</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Otros...</a></h4>
                                    </div>
                                </div>

                            </div><!--/category-products-->
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            <?php include('productos.blade.php');?>
                        </div><!--features_items-->
                    </div>
                </div>
            </div>
        </section>
<?php
include 'footer.inc.php'
?>