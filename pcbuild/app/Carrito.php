<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function user () {
        return $this->belongsTo('App\User');
    }
    
    public function lincarritos () {
        return $this->hasMany('App\Lincarrito');
    }
}
