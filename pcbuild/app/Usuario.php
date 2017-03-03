<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model 
{
    public $timestamps = false;
    public function pedidos() {
        return $this->hasMany('App\Pedido');
    }
}
