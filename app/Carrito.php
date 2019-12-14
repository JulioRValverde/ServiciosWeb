<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    
    public function productos()
    {
        return $this->hasMany('App\Producto', 'producto_id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Carrito', 'usuario_id');
    }
}
