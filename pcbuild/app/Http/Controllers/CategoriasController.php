<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function mostrarTodas(){
        $categorias = Categoria::paginate(5);
        return view('modificarCategoria', compact('categorias'));
    }

    public function mostrarCategoria($id){
        $categoria = Categoria::findOrFail($id);
        return view('modificarcat', compact('categoria'));
    }

    public function modificar(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return view('admin');
    }

    public function alta(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return view('admin');
    }

    public function baja($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
    }
}
