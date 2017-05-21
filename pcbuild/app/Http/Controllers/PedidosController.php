<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\User;
use App\Linpedido;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarPedidos() {
        $orden = '';
        $pedidos = Pedido::orderBy('id', 'desc')->paginate(5);
        return view('mostrarPedidos', compact('pedidos', 'orden'));
    }

    public function mostrarPedido($id){
        $pedido = Pedido::findOrFail($id);
        return view('modificarPedido', compact('pedido'));
    }

    public function mostrarPedidoUsuario ($id) {
        $usuario = User::findOrFail($id);
        $pedidos = Pedido::where('user_id', $usuario->id)->orderBy('id','desc')->paginate(5);
        foreach($pedidos as $pedido) {
            $cantidadArticulos = 0;
            $pagoPedido = 0;
            $linpedidos = $pedido->linpedidos;
            foreach($linpedidos as $linpedido) {
                $producto = $linpedido->producto;
                $cantidadArticulos = $cantidadArticulos + $linpedido->cantidad;
                $pagoPedido = $pagoPedido + ($linpedido->cantidad * $producto->precio);
            }
            $pedido->cantidad = $cantidadArticulos;
            $pedido->total = $pagoPedido;
        }

        return view('mostrarPedidosUsuario', compact('pedidos'));
    }

    public function mostrarPorPedido($pedidoId) {
        $orden = '';
        $linpedidos = Linpedido::where('pedido_id', '=', $pedidoId)->paginate(5);

        return view ('mostrarLinpedidos', compact('linpedidos', 'orden'));
    }

    public function ordenar($orden) {
		if ($orden == 'desc')
			$pedidos = Pedido::orderBy('id', 'desc')->paginate(5);
		else
			$pedidos = Pedido::orderBy('id', 'asc')->paginate(5);

		return view ('mostrarPedidos', compact('pedidos', 'orden'));
	}

    public function update(Request $request, $id){
        $pedido = Pedido::findOrFail($id);
        $usuario = User::where('email', '=', $request->email)->first();
        if ($usuario != NULL) {
            $pedido->fecha = $request->input('fecha');
            $pedido->user_id = $usuario->id;
            $pedido->save();
        }

        return redirect('admin/pedidos');
    }

    public function create(Request $request){
        $pedido = new pedido();
        $usuario = User::where('email', '=', $request->email)->first();
        if ($usuario != NULL) {
            $pedido->fecha = date('d/m/Y');
            $pedido->user_id = $usuario->id;
            $pedido->save();
        }
        return redirect('admin/pedidos');
    }

    public function delete($id){
        $pedido = pedido::findOrFail($id);
        $pedido->delete();

        return redirect('admin/pedidos');
    }
}
