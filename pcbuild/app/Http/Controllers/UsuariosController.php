<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function mostrarUsuarios(){
        $usuarios = User::paginate(10);
        return view('mostrarUsuarios', compact('usuarios'));
    }

    public function mostrarUsuario($id){
        $usuario = User::findOrFail($id);
        return view('modificarUsuario', compact('usuario'));
    }

    public function update(Request $request, $id){
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
}
