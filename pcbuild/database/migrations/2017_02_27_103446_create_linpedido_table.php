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
            $table->primary(['num', 'producto']);
            //$table->foreign('producto')->references('id')->on('productos');
            //$table->foreign('pedido')->references('id')->on('pedidos');
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
        Schema::dropIfExists('linpedido');
    }
}
