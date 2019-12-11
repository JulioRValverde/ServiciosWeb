<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    
    public function productos()
    {
        return $this->hasMany('App\Producto', 'producto_id');
    }
}
