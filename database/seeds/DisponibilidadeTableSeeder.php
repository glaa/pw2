<?php

use Illuminate\Database\Seeder;

class DisponibilidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Disponibilidade::class, 5)->create();
    }
}
