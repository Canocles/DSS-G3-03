<?php

namespace Tests\Unit;

use App\Usuario;
use App\Pedido;
use App\Linpedido;
use App\Producto;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductoTest extends TestCase
{

    public function testRelacionExtremoAExtremo() {
        $productos = Producto::all();
        foreach($productos as $producto) {
            $linpedido = $producto->linpedido;
            if ($linpedido != NULL) {
                $pedido = $linpedido->pedido;
                $usuario = $pedido->usuario;
                $this->assertEquals($usuario->id, $pedido->usuario_id);
                $this->assertEquals($pedido->id, $linpedido->pedido_id);
            }
        }
    }

    public function testRelacionLinpedido() {
        $productos = Producto::all();
        foreach($productos as $producto) {
            $linpedido = $producto->linpedido;
            if ($linpedido != NULL) {
                $this->assertEquals($linpedido->producto_id, $producto->id);
            }
        }
    }

    public function testInsertarProducto() {
        $producto = new Producto();
        $producto->nombre = 'MSI PruebaInsertar';
        $producto->precio = 1000000.99;
        $producto->descripcion = 'Tropecientos nucleos';
        $producto->save();
        $idInsertado = $producto->id;
        $this->assertEquals(Producto::find($idInsertado)->precio, 1000000.99);
    }
    
    public function testActualizarProducto() {
        $producto = Producto::where('nombre','=', 'MSI PruebaInsertar')->first();
        $this->assertEquals(Producto::find($producto->id)->precio, 1000000.99);
        $producto->precio = 99999.99;
        $producto->save();
        $this->assertEquals(Producto::find($producto->id)->precio, 99999.99);
    }

    public function testEliminarProducto() {
        $producto = Producto::where('nombre','=', 'MSI PruebaInsertar')->delete();
        $productoBorrado = Producto::where('nombre','=', 'MSI PruebaInsertar')->first();
        $noExisteProducto = function ($productoBorrado) {
            if ($productoBorrado == NULL)
                return true;
            return false;
        };
        $this->assertEquals($noExisteProducto($productoBorrado), true);
    }

    // Prueba específica para probar si al eliminar un usuario o producto
    // también se borran sus respectivos pedidos y líneas de pedidos.
    // Comentar la función en caso de querer repetir las pruebas anteriores
    // SI NO comentas esta función, para volver a poblar la base de datos
    // HACER: php artisan migrate:refresh --seed
    public function testOnDeleteCascade() {
        $producto = Producto::find(1);
        $productoBuscado = Linpedido::where('producto_id', '=', $producto->id)->first()->producto;
        $this->assertEquals($producto, $productoBuscado);

        $usuario = Usuario::find(3);
        $usuario->delete();
        $this->assertEquals(Pedido::find(3), NULL);
        $producto->delete();
        $this->assertEquals(Linpedido::where('pedido_id', '=', 3)->first(), NULL);
    }
}
