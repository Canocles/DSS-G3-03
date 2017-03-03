<?php

namespace Tests\Unit;

use App\Usuario;
use App\Pedido;
use App\Linpedido;
use App\Producto;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PedidoTest extends TestCase
{
    public function testRelacionLinpedido() {
        $linpedidos = Pedido::find(2)->linpedidos;
        foreach($linpedidos as $linpedido) {
            $producto = $linpedido->producto;
            $this->assertEquals($linpedido->producto_id, $producto->id);
        }
        $this->assertEquals($linpedidos[0]->producto_id, 1);
        $this->assertEquals($linpedidos[1]->producto_id, 6);
    }

    public function testRelacionUsuario() {
        $pedidos = Pedido::all();
        foreach($pedidos as $pedido) {
            $usuario = $pedido->usuario;
            $this->assertEquals($usuario->id, $pedido->usuario_id);
        }
    }

    public function testInsertarPedido() {

    }

    public function testActualizarPedido() {

    }

    public function testEliminarPedido() {

    }
}
