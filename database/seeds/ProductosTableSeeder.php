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
        DB::table('productos')->delete();
        for ($i=0; $i < 10 ; $i++) 
        { 
            
            App\Producto::create([
            'nombre' => 'Camisa',
            'precio' => 100,
            'rutaFoto'=>'Otra ruta',
            'tienda_id' => App\Tienda::all()->random()->id,
            'categoria_id' => App\Categoria::all()->random()->id,
            ]);

        }
    }
}
