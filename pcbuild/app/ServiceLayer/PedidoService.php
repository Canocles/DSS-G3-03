<?php
namespace App\ServiceLayer;
use Illuminate\Support\Facades\DB;

use Auth;
use App\Pedido;
use App\Producto;
use App\Linpedido;
use App\User;

class PedidoService{
    public static function procesarPedido(){
        $rb = false;
        DB::beginTransaction();
        $pedido = new Pedido();
        if(!Auth::check()) $rb=true;
        $pedido->user_id = Auth::user()->id;
        $fechaActual = date('d/m/Y');
        $pedido->fecha = $fechaActual;
        $carrito = \Session::get('carrito');
        $pedido->save();
        $num = 1;
        foreach ($carrito as $itemCarrito){
            $linea = new Linpedido();
            $linea->num = $num;
            $num = $num + 1;
            $linea->producto_id = $itemCarrito->id;
            $linea->cantidad = $itemCarrito->cantidad;
            $linea->pedido_id = $pedido->id;
            $linea->save();
        }
        if ($rb) DB::rollback();
        else {
            \Session::forget('carrito');
            DB::commit();
            }
        return $rb;
    }
}