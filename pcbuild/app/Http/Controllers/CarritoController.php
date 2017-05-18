<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CarritoController extends Controller
{
    public function __construct () {
        if (!\Session::has('carrito')) \Session::put('carrito', array());
    }
    // Mostrar carito
    public function show () {
        $carrito = \Session::get('carrito');
        $cantidadTotal = 0;
        foreach($carrito as $item) {
            $cantidadTotal = $cantidadTotal + $item->cantidad;
        }
        return view('carrito', compact('carrito', 'cantidadTotal'));
    }
    // Añadir producto
    public function add ($id) {
        $carrito = \Session::get('carrito');
        $producto = Producto::findOrFail($id);
        if ($producto->cantidad == null) {
            $producto->cantidad = 1;
        } 
        else {
            $producto->cantidad++;
        }
        $carrito[$id] = $producto;
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
    // Calcular total
}
