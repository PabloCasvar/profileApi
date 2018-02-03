<?php

use Illuminate\Database\Seeder;

class TrabajosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trabajos')->insert([
            'empresa'=>'Anzen Soluciones, S.A. de C.V.',
            'puesto'=>'Desarrollador JAVA',
            'descripcion'=>'',
            'periodo'=>'Dic/16 - Actual'
        ]);
    }
}
