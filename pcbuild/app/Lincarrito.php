<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lincarrito extends Model
{
    public function carrito () {
        return $this->belongsTo('App\Carrito');
    }
    
    public function producto () {
        return $this->belongsTo('App\Producto');
    }
}
