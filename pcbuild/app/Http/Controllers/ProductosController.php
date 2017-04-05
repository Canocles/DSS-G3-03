<?php

namespace App\Http\Controllers;
use App\Producto;//-> para los espacios de nombres
use App\Categoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
	//Consultas y búsquedas
    public function dameTodos(){
        $productos =Producto::paginate(6);//DB::table('productos')->get();//
		$categorias=Categoria::all();
       // return $productos;
	   return view('index',compact('productos','categorias'));//->with('productos',$productos);
	}
    public function dameAdmin(){
		$categorias=Categoria::all();
		
		return view('admin',compact('categorias'));
	}
    public function buscaID($id){
		$producto = Producto::findOrFail($id);
		$categorias=Categoria::all();
		//return $producto;
		return view('productoSingle',compact('producto','categorias'));
	}

    public function buscarNombre($nombre){
        $productos = DB::table('productos')->where('nombre', $nombre)->get();
        return $productos;
    }
	
    public function buscarCategoria($nombreCategoria){
		$categorias=Categoria::all();
        $idCategoria = Categoria::where('nombre', $nombreCategoria)->first();
        $productos = Producto::where('categoria', $idCategoria->id)->paginate(3);
        //return $productos;
		return view('index',compact('productos', 'categorias'));
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
