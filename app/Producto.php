<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'precio', 'tienda_id',
        ];
       
    public function tienda()
    {
        return $this->belongsTo('App\Tienda', 'tienda_id'); 
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
    
    public function carritos()
    {
        return $this->belongsToMany('App\CarritoProducto', 'carrito_id');
    }
       
}
