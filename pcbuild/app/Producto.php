<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function linPedido(){
		return $this->belongsTo('App\LinPedido');
	}
}
