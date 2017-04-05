<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function mostrarCategorias(){
        $categorias = Categoria::paginate(5);
        return view('mostrarCategorias', compact('categorias'));
    }

    public function mostrarCategoria($id){
        $categoria = Categoria::findOrFail($id);
        return view('modificarCategoria', compact('categoria'));
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return redirect('admin/categorias');
    }

    public function create(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return redirect('admin/categorias');
    }

    public function delete($id){
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect('admin/categorias');
    }
}