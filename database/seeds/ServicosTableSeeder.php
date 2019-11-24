<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Servico::class, 5)->create();
    }
}
