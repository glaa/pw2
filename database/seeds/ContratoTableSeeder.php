<?php

use Illuminate\Database\Seeder;

class ContratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contrato::class, 5)->create();
    }
}
