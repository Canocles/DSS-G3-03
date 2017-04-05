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
        $pedidos = Pedido::paginate(10);
        return view('mostrarPedidos', compact('pedidos'));
    }

    public function mostrarPedido($id){
        $pedido = Pedido::findOrFail($id);
        return view('modificarPedido', compact('pedido'));
    }

    public function mostrarPorPedido($pedidoId) {
        $linpedidos = Linpedido::where('pedido_id', '=', $pedidoId)->paginate(5);

        return view ('mostrarLinpedidos', compact('linpedidos'));
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
            $pedido->fecha = $request->input('fecha');
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