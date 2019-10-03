<?php

use Illuminate\Database\Seeder;

class Solicita_servicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Solicita_servico::class, 5)->create(); 
    }
}
