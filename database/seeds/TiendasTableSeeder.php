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
        ]);
        App\Tienda::create([
            'nombre' => 'AdidasSports',
            'descripcion' => 'Es una línea de ropa deportiva casual, la línea heredada de la marca alemana de ropa deportiva Adidas especializada en zapatos, camisas, abrigos, bolsos, gafas de sol y otros accesorios.',
        ]);
        App\Tienda::create([
            'nombre' => 'VansClasic',
            'descripcion' => 'Vans es una compañía textil, dedicada principalmente a la producción de calzados, también fabrica ropa, como sudaderas y camisetas',
        ]);

    }
}
