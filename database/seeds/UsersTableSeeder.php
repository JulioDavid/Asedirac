<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'nuevo alumno',
            'email' => 'alumno@mail.com',
            'password' => bcrypt('secret'),
            'nivel' => 1,
            'rol' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'asesor',
            'email' => 'asesor@mail.com',
            'password' => bcrypt('secret'),
            'nivel' => 3,
            'rol'=>1,
        ]);

        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'nivel' => 3,
            'rol' => 2,
        ]);
    }
}
