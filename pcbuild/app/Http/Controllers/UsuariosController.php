<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function mostrarUsuarios(){
        $orden = '';
        $usuarios = User::paginate(5);
        return view('mostrarUsuarios', compact('usuarios', 'orden'));
    }

    public function mostrarUsuario($id){
        $usuario = User::findOrFail($id);
        return view('modificarUsuario', compact('usuario'));
    }

    public function ordenar($orden) {
		if ($orden == 'desc')
			$usuarios = User::orderBy('nombre', 'desc')->paginate(5);
		else
			$usuarios = User::orderBy('nombre', 'asc')->paginate(5);

		return view ('mostrarUsuarios', compact('usuarios', 'orden'));
	}

    public function update(Request $request, $id){

        $this->validate($request, [
            'nombre' => 'required|max:60',
            'apellidos' => 'required|max:60',
			'direccion' => 'required',
			'telefono' => 'required|integer',
			'fechaNacimiento' => 'required|date_format:d/m/Y',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $usuario = User::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fechaNacimiento = $request->input('fechaNacimiento');
        $usuario->email = $request->input('email');
        $usuario->password = '1234';
        $usuario->save();

        return redirect('admin/usuarios');
    }

    public function create(Request $request){
        $usuario = new User();
        $this->validate($request, [
            'nombre' => 'required|max:60',
            'apellidos' => 'required|max:60',
			'direccion' => 'required',
			'telefono' => 'required|integer',
			'fechaNacimiento' => 'required|date_format:d/m/Y',
            'email' => 'required|email',
        ]);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fechaNacimiento = $request->input('fechaNacimiento');
        $usuario->email = $request->input('email');
        $usuario->password = '1234';
        $usuario->save();

        return redirect('admin/usuarios');
    }

    public function delete($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('admin/usuarios');
    }

    public function updateUser (Request $request, $id) {
        $usuario = User::find($id);

        $this->validate($request, [
            'nombre' => 'required|max:60',
            'apellidos' => 'required|max:60',
			'fechaNacimiento' => 'required|date_format:d/m/Y',
            'email' => 'required|email',
        ]);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->email = $request->input('email');
        $usuario->fechaNacimiento = $request->input('fecha');
        $usuario->save();

        return redirect('/perfil');
    }

    public function updateUserDir (Request $request, $id) {
        $this->validate($request, [
			'direccion' => 'required',
			'telefono' => 'required|integer',
        ]);
        $usuario = User::find($id);
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->save();

        return redirect('/perfil');
    }
}
