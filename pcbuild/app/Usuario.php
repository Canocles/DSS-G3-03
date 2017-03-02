<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    public function pedidos() {
        return $this->hasMany('App\Pedido');
    }
}
