<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLincarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lincarritos', function (Blueprint $table) {
            $table->integer('num');
            $table->integer('cantidad');
            $table->integer('producto_id');
            $table->integer('carrito_id');
            $table->primary(['num', 'carrito_id'])->index();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('carrito_id')->references('id')->on('carritos')->onDelete('cascade');
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
        Schema::dropIfExists('lincarritos');
    }
}
