<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('usuarios')->insert([
            'nombre' => 'Nelson Redondo',
            'email' => 'nredondo26@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
