<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function dameTodos(){
        $productos = DB::table('productos')->get();
        return $productos;
    }

    public function buscarNombre($nombre){
        $productos = DB::table('productos')->where('nombre', $nombre)->get();
        return $productos;
    }

    public function buscarCategoria($nombreCategoria){
        $idCategoria = DB::table('categorias')->where('nombre', $nombreCategoria)->first();
        $productos = DB::table('productos')->where('categoria', $idCategoria)->get();
        return $productos;
    }

    public function buscarNombreCategoria($nombreProducto, $nombreCategoria){
        $idCategoria = DB::table('categorias')->where('nombre', $nombreCategoria)->first();
        
        $productos = DB::table('productos')->where([
            ['nombre', $nombreProducto],
            ['categoria', $nombreCategoria],
        ])->get();
        return $productos;
    }
}
