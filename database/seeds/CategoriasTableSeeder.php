<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        App\Categoria::create([
        'nombre' => 'Deportivos',
        ]);
        App\Categoria::create([
            'nombre' => 'Casuales',
        ]);
        App\Categoria::create([
            'nombre' => 'Personalizado',
        ]);
        App\Categoria::create([
            'nombre' => 'Clasicos',
        ]);

    }
}
