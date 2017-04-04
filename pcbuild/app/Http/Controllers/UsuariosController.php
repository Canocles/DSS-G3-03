<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function mostrarTodos(){
        $usuarios = User::all();
        return view('modificarUsuario', compact('usuarios'));
    }

    public function mostrarUsuario($id){
        $usuario = User::findOrFail($id);
        return view('modificarusu', compact('usuario'));
    }

    public function modificar(Request $request, $id){
        $usuario = User::where('id','=',$id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha = $request->input('fecha');
        $usuario->email = $request->input('email');
    }

    public function alta(Request $request){
        $usuario = new User();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha = $request->input('fecha');
        $usuario->email = $request->input('email');
    }

    public function baja($email){
        $usuario = User::where('email','=',$email)->first();
        $usuario->delete();
    }
}
