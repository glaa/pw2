<?php

use Illuminate\Database\Seeder;
use App\Disponibilidade;

class DisponibilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Disponibilidade::class, 5)->create();
    }
}
