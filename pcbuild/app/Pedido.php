<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    public function user() {
		return $this->belongsTo('App\User');
	}
    
    public function linpedidos() {
        return $this->hasMany('App\Linpedido');
    }
}
