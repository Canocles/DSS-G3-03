<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinPedido extends Model {

    public function pedido () {
        return $this->belongsTo('App/Pedido');
    }

    public function producto () {
        return $this->hasOne('App/Producto');
    }
}

