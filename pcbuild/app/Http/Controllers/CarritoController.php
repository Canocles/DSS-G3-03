<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
    public function __construct () {
        if (!\Session::has('carrito')) \Session::put('carrito', array());
        if (!\Session::has('cantidadTotal')) \Session::put('cantidadTotal', 0);
    }

    // Mostrar carito
    public function show () {
        $carrito = \Session::get('carrito');
        $cantidadTotal = 0;
        $precioTotal = $this->total();
        foreach($carrito as $item) {
            $cantidadTotal = $cantidadTotal + $item->cantidad;   
        }
        \Session::put('cantidadTotal', $cantidadTotal);
        return view('carrito', compact('carrito', 'cantidadTotal', 'precioTotal'));
    }
    // Añadir producto
    public function add ($id) {
        $carrito = \Session::get('carrito');
        $encontrado = false;
        foreach($carrito as $item) {
            if ($item->id == $id) {
                $encontrado = true;
            }
        }
        if ($encontrado) {
            $carrito[$id]->cantidad++;
        }
        else {
            $producto = Producto::findOrFail($id);
            $producto->cantidad = 1;
            $carrito[$id] = $producto;
        }
        \Session::put('carrito', $carrito);

        return redirect()->route('carrito-show');
    }
    // Borrar producto
    public function delete ($id) {
        $carrito = \Session::get('carrito');
        $producto = Producto::findOrFail($id);
        unset($carrito[$id]);
        \Session::put('carrito', $carrito);

        return redirect()->route('carrito-show');
    }
    // Actualizar producto
    public function update (Request $request, $id) {
        $carrito = \Session::get('carrito');
        $producto = Producto::findOrFail($id);
        $carrito[$id]->cantidad = $request->cantidad;
        \Session::put('carrito', $carrito);

        return redirect()->route('carrito-show');
    }
    // Vaciar carrito
    public function trash () {
        \Session::forget('carrito');

        return redirect()->route('carrito-show');
    }

    public function total () {
        $carrito = \Session::get('carrito');
        $precioTotal = 0.0;
        foreach($carrito as $item) {
            $precioTotal = $precioTotal + ($item->precio * $item->cantidad);
        }

        return $precioTotal;
    }

    public function order () {
        $carrito = \Session::get('carrito');
        $cantidad = \Session::get('cantidadTotal');
        $total = $this->total();
        if (count($carrito) <= 0) {
            return redirect()->action('ProductosController@dameTodos');
        }

        return view('detallesPedido', compact('carrito', 'total', 'cantidad'));
    }
}
