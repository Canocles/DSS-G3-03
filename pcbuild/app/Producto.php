<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	public $timestamps = false;
    public function linpedido(){
		return $this->hasOne('App\Linpedido');
	}
}
