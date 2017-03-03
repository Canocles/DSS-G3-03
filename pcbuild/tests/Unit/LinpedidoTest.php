<?php

namespace Tests\Unit;

use App\Usuario;
use App\Pedido;
use App\Linpedido;
use App\Producto;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinpedidoTest extends TestCase
{
    public function testRelacionLinpedido() {
        
    }

    public function testInsertarLinpedido() {
        $producto = Producto::where('nombre','=', 'Gráfica 1')->first();
        $pedido = Pedido::where('id', '=', 1)->first();
        $linpedido = new Linpedido();
        $linpedido->num = 4;
        $linpedido->cantidad = 2;
        $linpedido->pedido()->associate($pedido);
        $linpedido->producto()->associate($producto);
        $linpedido->save();
        $idInsertado = $linpedido->num;
        $insertado = Linpedido::where('num', '=', $idInsertado)->first();
        $this->assertEquals($insertado->pedido, $pedido);
        $this->assertEquals($insertado->producto, $producto);

        $linpedidos = Linpedido::where('pedido_id', '=', 1)->get();
        $this->assertEquals(count($linpedidos), 4);
    }
    
    public function testActualizarLinpedido() {
        $linpedido = Linpedido::where('num', '=', 4)->first();
        $this->assertEquals($linpedido->producto->precio, 30.0);
        $linpedido->producto->precio = 99999.99;
        $linpedido->save();
        $this->assertEquals($linpedido->producto->precio, 99999.99);
    }

    public function testEliminarLinpedido() {
        $linpedido = Linpedido::where('num', '=', 4)->delete();
        $linpedidoBorrado = Linpedido::where('num', '=', 4)->first();
        $noExisteLinpedido = function ($linpedidoBorrado) {
            if ($linpedidoBorrado == NULL)
                return true;
            return false;
        };
        $this->assertEquals($noExisteLinpedido($linpedidoBorrado), true);
    }
}
