<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         $this->call(TiendasTableSeeder::class);
         $this->call(CategoriasTableSeeder::class);
         $this->call(ProductosTableSeeder::class);
         
    }
}
