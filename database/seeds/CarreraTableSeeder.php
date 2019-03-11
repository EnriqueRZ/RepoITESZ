<?php

use Illuminate\Database\Seeder;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CARRERA')->insert([
            'NOMBRE_CARRERA' => 'INGENIERIA EN SISTEMAS COMPUTACIONALES',
            'PLAN_ESTUDIOS' => null,
            'CANTIDAD_SEMESTRE' => 9,
        ]);
    }
}
