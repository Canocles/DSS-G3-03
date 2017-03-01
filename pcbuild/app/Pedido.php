<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function usuario() {
		return $this->belongsTo('App\Usuario');
	}
    
    public function linPedidos() {
        return $this->hasMany('App\LinPedido');
    }
}
