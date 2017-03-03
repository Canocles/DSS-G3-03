<?php

namespace Tests\Unit;

use App\Usuario;
use App\Pedido;
use App\Linpedido;
use App\Producto;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsuarioTest extends TestCase
{
    public function testRelacionTotal() {
        $pedidos = Usuario::find(1)->pedidos;
        // Pese a que esta prueba es únicamente de Usuario
        // hemos decidido, realizar una prueba navegando por
        // las distintas tablas relacionadas, para ver si realmente
        // podemos llegar desde un extremo del UML al otro.
        foreach($pedidos as $pedido) {
            $linpedidos = Pedido::find($pedido->id)->linpedidos;
            foreach($linpedidos as $linpedido) {
                $producto = Producto::find($linpedido->producto_id);
                // Prueba de linapedidos relacionados con un pedido
                $this->assertEquals($pedido->id, $linpedido->pedido_id);
                // Pruebas de producto relacionado con línea
                $this->assertEquals($producto->id, $linpedido->producto_id);
            }
        }
        
        // Pruebas de pedidos()
        $this->assertEquals($pedidos[0]->id, 1);
        $this->assertEquals($pedidos[1]->id, 6);
    }

    public function testRelacionPedido() {
        $usuariosConPedidos = Usuario::has('pedidos')->get();
        foreach($usuariosConPedidos as $usuarioConPedido) {
            $this->assertEquals($usuarioConPedido, 
                                Usuario::find($usuarioConPedido->id));
        }
    }

    public function testInsertarUsuario() {
        // Insertamos un usuario;
        $usuario = new Usuario();
        $usuario->nombre = 'Cloud';
        $usuario->email = 'Cloud@pcbuild.com';
        $usuario->apellidos = 'Strife';
        $usuario->telefono = '654987321';
        $usuario->fechaNacimiento = '22/06/1985';
        $usuario->save();
        $idInsertado = $usuario->id;

        $this->assertEquals(Usuario::find($idInsertado)->nombre, 'Cloud');
    }

    public function testActualizarUsuario() {
        $usuario = Usuario::where('nombre', '=', 'Cloud')->first();
        $this->assertEquals(Usuario::find($usuario->id)->email, 'Cloud@pcbuild.com');
        $usuario->email = 'ElmejorPJdelMundo@pcbuild.com';
        $usuario->save();

        $this->assertEquals(Usuario::find($usuario->id)->email, 'ElmejorPJdelMundo@pcbuild.com');
    }

    public function testBorrarUsuario() {
        $usuario = Usuario::where('nombre', '=', 'Cloud')->delete();
    }
}
