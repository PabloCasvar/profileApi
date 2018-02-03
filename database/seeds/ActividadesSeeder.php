<?php

use Illuminate\Database\Seeder;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades')->insert([
            'trabajo_id'=>1, 
            'cuerpo_actividad'=>'Desarrollo de Front-End para institución bancaria haciendo uso de HTML5, CSS3, bootstrap, javaScript, Angular 1.6, Git, Maven y Backbase'
        ]);
        DB::table('actividades')->insert([
            'trabajo_id'=>1, 
            'cuerpo_actividad'=>'Hacer cosas asombrosas'
        ]);
    }
}
