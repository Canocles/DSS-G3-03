<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    public function usuario() {
		return $this->belongsTo('App\Usuario');
	}
    
    public function linpedidos() {
        return $this->hasMany('App\Linpedido');
    }
}
