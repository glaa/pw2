<?php

use Illuminate\Database\Seeder;
use App\Contrato;

class ContratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contrato::class, 10)->create();
    }
}
