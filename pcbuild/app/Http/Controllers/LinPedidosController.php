<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linpedido;
use App\Producto;
use App\Pedido;

class LinPedidosController extends Controller
{
    public function mostrarLinpedidos() {
        $orden = '';
        $linpedidos = Linpedido::orderBy('pedido_id')->paginate(5);
        return view ('mostrarLinpedidos', compact('linpedidos','orden'));
    }

    public function mostrarLinpedidosPedido($num) {
        $orden = '';
        $linpedido = Linpedido::where('num', $num)->first();
        return view ('modificarLinpedido', compact('linpedido', 'orden'));
    }

    public function ordenar($orden) {
		if ($orden == 'desc')
			$linpedidos = Linpedido::orderBy('pedido_id', 'desc')->paginate(5);
		else
			$linpedidos = Linpedido::orderBy('pedido_id', 'asc')->paginate(5);

		return view ('mostrarLinpedidos', compact('linpedidos', 'orden'));
	}

    public function update(Request $request, $num, $pedido_id){
        $linpedido = Linpedido::where([
            ['pedido_id', $pedido_id],
            ['num', $num],
        ])->first();
        if ($linpedido != NULL) {
            $linpedido->cantidad = $request->cantidad;
            $linpedido->save();
        }
        return redirect('admin/linpedidos');
    }

    public function create(Request $request){
        $linpedido = new Linpedido();
        $pedido = Pedido::where('id', $request->pedido_id)->first();
        $producto = Producto::where('id', $request->producto_id)->first();
        if ($pedido != NULL && $producto != NULL) {
            $linpedido->num = $request->num;
            $linpedido->cantidad = $request->cantidad;
            $linpedido->pedido_id = $pedido->id;
            $linpedido->producto_id = $producto->id;
            $linpedido->save();
        }
        return redirect('admin/linpedidos');
    }

    public function delete($num, $pedido_id){
        $linpedido = Linpedido::where([
            ['pedido_id', $pedido_id],
            ['num', $num],
        ])->delete();
        return redirect('admin/linpedidos');
    }
}
