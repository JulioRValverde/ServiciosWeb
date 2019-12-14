<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("RR Optimus", "AdiColor", "Force 1", "Panamas","Filas","Oxford");
        $rutas = array("https://c.static-nike.com/a/images/t_PDP_1280_v1/f_auto/lyt3fz24hhr5k0erv5km/viale-zapatillas-jqSLbl.jpg",
         "https://s3.amazonaws.com/imagenes-seventeen/p/13267-large_default.jpg", 
         "https://www.digitalsport.com.ar/files/products/5abbfade6ab1e-436247-500x500.jpg", 
         "https://scene7.zumiez.com/is/image/zumiez/pdp_hero/adidas-U-Path-Run-zapatos-negros%2C-blancos-y-rosas-_307797.jpg",
         "https://dafitistaticco-a.akamaihd.net/p/adidas-originals-6423-669218-1-product.jpg",
         "https://ridestore.imgix.net/catalog/product/d/2/d2956_10.jpg?w=320&auto=format&q=50");

        DB::table('productos')->delete();
        for ($i=0; $i < 30 ; $i++) 
        { 
            $nume=rand(0,5);
            App\Producto::create([
            'nombre' => $array[$nume],
            'precio' => rand(100,200),
            'rutaFoto'=>$rutas[$nume],
            'tienda_id' => App\Tienda::all()->random()->id,
            'categoria_id' => App\Categoria::all()->random()->id,
            ]);

        }
    }
}
