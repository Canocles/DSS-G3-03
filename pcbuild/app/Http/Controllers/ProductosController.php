<?php

namespace App\Http\Controllers;
use App\Producto;//-> para los espacios de nombres
use Illuminate\Http\Request;

class ProductosController extends Controller
{
	//Consultas y búsquedas
    public function dameTodos(){
        $productos =DB::table('productos')->get();//Producto::all()
		
       // return $productos;
	   return view::make('index',compact('productos'));//->with('productos',$productos);
	}
    
    public function buscaID($id){
		$producto = Producto::findOrFail($id);
		return $producto;
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
        $categoria = DB::table('categorias')->where('nombre', $nombreCategoria)->first();
        $idCategoria = $categoria->id;
        
        $productos = DB::table('productos')->where([
            ['nombre', $nombreProducto],
            ['categoria', $nombreCategoria],
        ])->get();
        return $productos;
    }
    
    //Create
    public function anadirProducto($nombre, $precio, $urlImagen, $descripcion, $categoria){
		$producto = new Producto();
		$producto->nombre = $nombre;
		$producto->precio = $precio;
		$producto->urlImagen = $urlImagen;
		$producto->descripcion = $descripcion;
		$producto->categoria = $categoria;
		
		$producto->save();
	}
	
	//Update
	public function update($id, $nombre, $precio, $urlImagen, $descripcion, $categoria){
		$producto = Producto::findOrFail($id);
		
		$producto->nombre = $nombre;
		$producto->precio = $precio;
		$producto->urlImagen = $urlImagen;
		$producto->descripcion = $descripcion;
		$producto->categoria = $categoria;
		
		$producto->save();
	}
	
	//Delete
	public function borrar($id){
		$product = Product::find($id);
		$product->delete();
	}
}
