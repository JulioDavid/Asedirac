<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Llenado de datos para las areas
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert(['id' => 0, 'nombre' =>	'fisica']);
        DB::table('areas')->insert(['id' => 1,  'nombre' => 'matematicas']);
        DB::table('areas')->insert(['id' => 2, 'nombre' =>  'programacion']);
        DB::table('areas')->insert(['id' => 3, 'nombre' =>  'quimica']);
    }
}
