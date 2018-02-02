<?php

use Illuminate\Database\Seeder;

class CanalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canales')->insert([
            'nombre'=>'CASVAR FM',
            'url_youtube'=>'https://www.youtube.com/channel/UC0mVbnTwhUmJQckdeEm1Ovw', 
            'descripcion'=>'Canal de tutoriales de Física y Matemáticas.'
        ]);
        DB::table('canales')->insert([
            'nombre'=>'PABLO CASVAR',
            'url_youtube'=>'https://www.youtube.com/user/casvarfm', 
            'descripcion'=>'Canal de animaciones y efectos de video.'
        ]);
    }
}
