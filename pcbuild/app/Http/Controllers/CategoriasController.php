<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function mostrarTodas(){
        $categorias = Categoria::all()->orderBy('nombre','asc')-get();
        //return();
    }

    public function mostrarID($id){
        $categoria = Categoria::find($id);
        //return;
    }

    public function modificar(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        //return;
    }

    public function alta(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();
    }

    public function baja($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
    }
}
