<?php

namespace App\Http\Controllers;
use App\Producto;//-> para los espacios de nombres
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class ProductosController extends Controller
{
	//Consultas y búsquedas
    public function dameTodos(){
        $productos =Producto::paginate(6);//DB::table('productos')->get();//
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
       // return $productos;
	   return view('index',compact('productos','categorias'));//->with('productos',$productos);
	}
    public function dameAdmin(){
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
		return view('admin',compact('categorias'));
	}

	public function dameCategorias() {
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
		return view('altaproducto', compact('categorias'));
	}

    public function buscaID($id){
		$producto = Producto::findOrFail($id);
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
		//return $producto;
		return view('productoSingle',compact('producto','categorias'));
	}

    public function buscarNombre(Request $request){
		$this->validate($request, [
            'producto' => 'required|max:60',
        ]);
		$busqueda=$request->input('producto');
		$productos = Producto::where('nombre', 'like', '%'.$busqueda.'%')->paginate(6);
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
       /// return $productos;
	   	return view('index',compact('productos','categorias'));
    }
	public function buscarPrecio(Request $request){
		$this->validate($request, [
            'precio' => 'required|integer|max:60',
        ]);
		$precio = $request->input('precio');
		if($precio == "desc"){//0-> mayor a menor (desc)
			$productos = Producto::where('precio', '>', 0)->orderBy('precio', 'desc')->paginate(6);
		}
		if($precio == "asc"){
			$productos = Producto::where('precio', '>', 0)->orderBy('precio')->paginate(6);
		}
		$categorias=Categoria::all();
       /// return $productos;
	   	return view('index',compact('productos','categorias'));
    }

	public function ordenar($orden) {
		if ($orden == 'desc')
			$productos = Producto::orderBy('precio', 'desc')->paginate(6);
		else
			$productos = Producto::orderBy('precio', 'asc')->paginate(6);

		return view ('mostrarProductos', compact('productos', 'orden'));
	}
	
    public function buscarCategoria($nombreCategoria){
		$categorias=Categoria::orderBy('nombre', 'asc')->get();
        $idCategoria = Categoria::where('nombre', $nombreCategoria)->first();
        $productos = Producto::where('categoria', $idCategoria->id)->paginate(6);
        //return $productos;
		return view('index',compact('productos', 'categorias'));
    }

	// Vista de Administrador
	public function mostrarProductos() {
		$orden = '';
		$productos = Producto::paginate(5);
		return view('mostrarProductos', compact('productos', 'orden'));
	}

	public function mostrarProducto($id) {
		$producto = Producto::findOrFail($id);
		$categorias = Categoria::all();
		return view ('modificarProducto', compact('producto', 'categorias'));
	}
    
    //Create
    public function create(Request $request){
		$this->validate($request, [
            'nombre' => 'required|max:60',
            'descripcion' => 'required|max:255',
			'precio' => 'required|integer',
			'categoria' => 'required',
        ]);
		$categoria = Categoria::where('nombre', $request->input('categoria'))->first();
		$producto = new Producto();
		$producto->nombre = $request->input('nombre');
		$producto->precio = $request->input('precio');
		if ($request->hasFile('file')) {
			$file = $request->file;
			\Storage::disk('local')->put($producto->nombre, \File::get($file));
			$producto->urlImagen = 'images/productos/' . $producto->nombre;
		}
		else
			$producto->urlImagen = 'images/productos/pordefecto.jpg';
		$producto->descripcion = $request->input('descripcion');
		$producto->categoria = $categoria->id;
		$producto->save();

		return redirect('admin/productos');
	}
	
	//Update
	public function update(Request $request, $id){

		$this->validate($request, [
            'nombre' => 'required|max:60',
            'descripcion' => 'required|max:255',
			'precio' => 'required|numeric',
			'categoria' => 'required',
        ]);
		
		$categoria = Categoria::where('nombre', $request->input('categoria'))->first();
		$producto = Producto::findOrFail($id);
		
		$producto->nombre = $request->input('nombre');
		$producto->precio = $request->input('precio');
		if ($request->hasFile('file')) {
			$file = $request->file;
			\Storage::disk('local')->put($producto->nombre, \File::get($file));
			$producto->urlImagen = 'images/productos/' . $producto->nombre;
		}
		$producto->urlImagen = 'images/productos/pordefecto.jpg';
		$producto->descripcion = $request->input('descripcion');
		$producto->categoria = $categoria->id;
		$producto->save();

		return redirect('admin/productos');
	}
	
	//Delete
	public function delete($id){
		$product = Producto::findOrFail($id);
		$product->delete();

		return redirect('admin/productos');
	}
}
