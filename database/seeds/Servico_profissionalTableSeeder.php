<?php

use Illuminate\Database\Seeder;

class Servico_profissionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Servico_profissional::class, 5)->create(); 
    }
}
