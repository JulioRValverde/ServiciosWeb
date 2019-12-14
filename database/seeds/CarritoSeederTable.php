<?php

use Illuminate\Database\Seeder;

class CarritoSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = DB::table('users')->get();
        foreach ($usuarios as $usuario) 
        {
            App\Carrito::create([
                'usuario_id' => $usuario->id,
                
                ]);
        }
        
    }
}
