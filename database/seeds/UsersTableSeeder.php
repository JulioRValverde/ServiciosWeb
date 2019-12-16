<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        App\User::create([
        'name' => 'Julio Valverde',
        'email'=> 'julio@gmail.com',
        'password' => Hash::make('hola123'),
        ]);
    }
}
