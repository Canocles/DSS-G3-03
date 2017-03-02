<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinpedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linpedidos', function (Blueprint $table) {
            $table->integer('num');
            $table->integer('cantidad');
            $table->integer('producto');
            $table->integer('pedido');
            $table->primary(['num', 'pedido']);
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linpedidos', function (Blieprint $table) {
            $table->dropForeign('linpedidos_producto_foreign');
            $table->dropForeign('linpedidos_pedido_foreign');
        });
    }
}
