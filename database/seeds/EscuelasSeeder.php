<?php

use Illuminate\Database\Seeder;

class EscuelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escuelas')->insert([
            'institucion' => 'Instituto Politécnico Nacional', 
            'campus'=> 'Centro de Investigación en Computación', 
            'titulo' => 'Maestro en Ciencias en Ingeniería de Cómputo',
            'periodo'=> 'Ene/14 - Jul/16'
        ]);
    }
}
