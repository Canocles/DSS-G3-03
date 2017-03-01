<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClaveAjenaLinpedidosPedidosProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('linpedidos', function (Blueprint $table) {
            $table->foreign('producto')->references('id')->on('productos');
            $table->foreign('pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('linpedidos', function (Blueprint $table) {
            $table->dropForeign('producto');
            $table->dropForeign('pedido');
        });
    }
}
