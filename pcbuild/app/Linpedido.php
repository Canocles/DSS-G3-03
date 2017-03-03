<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linpedido extends Model
{
    public function pedido () {
        return $this->belongsTo('App\Pedido');
    }
    public function producto () {
        return $this->belongsTo('App\Producto');
    }
}
