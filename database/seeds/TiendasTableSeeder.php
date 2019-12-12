<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->delete();
        App\Tienda::create([
        'nombre' => 'NikeSports',
        'descripcion' => 'Nike fabrica una amplia gama de equipamiento deportivo. Sus primeros productos fueron zapatos de pista para correr.',
        'rutaFoto'=> 'https://medias.fashionnetwork.com/image/upload/v1/medias/ced171cb3ad0119c4b76eaacdadc68332109504.jpg',
        ]);
        App\Tienda::create([
            'nombre' => 'AdidasSports',
            'descripcion' => 'Es una línea de ropa deportiva casual, la línea heredada de la marca alemana de ropa deportiva Adidas especializada en zapatos',
            'rutaFoto'=> 'https://www.cmdsport.com/app/uploads/2019/04/adidas-tienda3.jpg',
        ]);
        App\Tienda::create([
            'nombre' => 'VansClasic',
            'descripcion' => 'Vans es una compañía textil, dedicada principalmente a la producción de calzados, también fabrica ropa, como sudaderas y camisetas',
            
            'rutaFoto'=> 'https://medias.fashionnetwork.com/image/upload/v1/medias/59bd2a65e7ac9ed2134413163ade34462157979.jpg',
        ]);

    }
}
