<?php

use Illuminate\Database\Seeder;

class PreciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precios')->insert([
        	'id' => 0,
        	'descripcion' => 'Secundaria a domicilio',
        	'nivel'=> 0,
        	'modalidad' => 0,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 1,
        	'descripcion' => 'Prepa a domicilio',
        	'nivel'=> 1,
        	'modalidad' => 0,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 2,
        	'descripcion' => 'universidad a domicilio',
        	'nivel'=> 2,
        	'modalidad' => 0,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 3,
        	'descripcion' => 'Secundaria en linea',
        	'nivel'=> 0,
        	'modalidad' => 1,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 4,
        	'descripcion' => 'prepa en linea',
        	'nivel'=> 1,
        	'modalidad' => 1,
        	'precio' => 100.00,
        ]);


        DB::table('precios')->insert([
        	'id' => 5,
        	'descripcion' => 'universidad en linea',
        	'nivel'=> 2,
        	'modalidad' => 2,
        	'precio' => 100.00,
        ]);


        DB::table('precios')->insert([
        	'id' => 6,
        	'descripcion' => 'Secundaria lugar a convenir',
        	'nivel'=> 0,
        	'modalidad' => 2,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 7,
        	'descripcion' => 'prepa lugar a convenir',
        	'nivel'=> 1,
        	'modalidad' => 2,
        	'precio' => 100.00,
        ]);

        DB::table('precios')->insert([
        	'id' => 8,
        	'descripcion' => 'universidad a convenir',
        	'nivel'=> 2,
        	'modalidad' => 2,
        	'precio' => 100.00,
        ]);

    }
}
