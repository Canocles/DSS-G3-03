<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialController extends Controller
{
    public function redirect () {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback () {
        $user = Socialite::driver('facebook')->user();
        $usuario = User::where('email', $user->getEmail())->first();
        if ($usuario != null) {
            Auth::login($usuario);
        }
        else {
            $usuario = new User();
            $usuario->nombre = $user->getName();
            $usuario->email = $user->getEmail();
            $usuario->social = true;
            $usuario->save();
            Auth::login($usuario);
        }
        return redirect('/');
    }
}
