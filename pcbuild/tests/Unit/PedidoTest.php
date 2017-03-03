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
        $usuario = Usuario::where('nombre', '=', 'Javier')->first();
        $pedido = new Pedido();
        $pedido->fecha =  date('d/m/Y');
        $pedido->usuario()->associate($usuario);
        $pedido->save();
    }
    
    public function testActualizarPedido() {
        $pedido = Pedido::where('usuario_id','=', '6')->first();
        $this->assertEquals(Pedido::find($pedido->id)->fecha, date('d/m/Y'));
        $pedido->fecha = '25/02/2016';
        $pedido->save();
        $this->assertEquals(Pedido::find($pedido->id)->fecha, '25/02/2016');
    }

    public function testEliminarPedido() {
        $pedido = Pedido::where('usuario_id', '=', '6')->delete();
        $pedidoBorrado = Pedido::where('usuario_id','=', '6')->first();
        $noExistePedido = function ($pedidoEliminado) {
            if ($pedidoEliminado == NULL)
                return true;
            return false;
        };
        $this->assertEquals($noExistePedido($pedidoBorrado), true);
    }
}
