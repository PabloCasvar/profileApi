<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CanalesSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(TrabajosSeeder::class);
        $this->call(ActividadesSeeder::class);
        $this->call(EscuelasSeeder::class);
    }
}
