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
        ]);
        App\Tienda::create([
            'nombre' => 'AdidasSports',
        ]);
        App\Tienda::create([
            'nombre' => 'VansClasic',
        ]);

    }
}
