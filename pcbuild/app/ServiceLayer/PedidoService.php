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
        $pedido->insert();
        if(!Auth::check()) $rb=true;
        $pedido->user = Auth::user()->id;
        $carrito = \Sesion::get('carrito');
        foreach ($carrito as $itemCarrito){
            $linea = new Linpedido();
            $linea->producto = $itemCarrito->id;
            $linea->cantidad = $itemCarrito->cantidad;
            $linea->pedido = $pedido->id;
            $linea->insert();
        }
        if ($rb) DB::rollback();
        else {
            \Session::forget('carrito');
            DB::commit();
            }
        return $rb;
    }
}