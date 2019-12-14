<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoProducto extends Model
{


    public function carritos()
    {
        return $this->belongsToMany('App\Carrito', 'carrito_id');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'producto_id');
    }

}
