<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function linpedido(){
		return $this->belongsTo('App\Linpedido');
	}
}
