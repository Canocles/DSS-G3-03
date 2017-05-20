<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    public $timestamps = false;
    public function pedidos() {
        return $this->hasMany('App\Pedido');
    }

    public function carrito() {
         return $this->hasOne('App\Carrito');
    }

    protected $fillable = ['nombre', 'apellidos', 'email', 'password','telefono','direccion', 'fechaNacimiento', 'social', 'esadmin'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
