<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function mostrarTodos(){
        $ususarios = User::all();
        //return;
    }

    public function mostrarEmail($email){
        $usuario = Usuario::where('email','=',$email);
        //return;
    }

    public function modificar(Request $request, $id){
        $usuario = Usuario::where('id','=',$id);
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha = $request->input('fecha');
        $usuario->email = $request->input('email');
    }

    public function alta(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombre');
        $usuario->apellidos = $request->input('apellidos');
        $usuario->direccion = $request->input('direccion');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha = $request->input('fecha');
        $usuario->email = $request->input('email');
    }

    public function baja($email){
        $usuario = Usuario::where('email','=',$email)->first();
        $usuario->delete();
    }
}
