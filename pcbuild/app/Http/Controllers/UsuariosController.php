<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function mostrarTodos(){
        $usuarios = User::paginate(10);
        return view('modificarUsuario', compact('usuarios'));
    }

    public function mostrarUsuario($id){
        $usuario = User::findOrFail($id);
        return view('modificarusu', compact('usuario'));
    }

    public function modificar(Request $request, $id){
        $usuario = User::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fechaNacimiento = $request->input('fechaNacimiento');
        $usuario->email = $request->input('email');
        $usuario->password = '1234';

        $usuario->save();
        return view('admin');
    }

    public function alta(Request $request){
        $usuario = new User();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fechaNacimiento = $request->input('fechaNacimiento');
        $usuario->email = $request->input('email');
        $usuario->password = '1234';

        $usuario->save();
        return view('admin');
    }

    public function baja($email){
        $usuario = User::where('email','=',$email)->first();
        $usuario->delete();
    }
}
