<?php

use Illuminate\Database\Seeder;
use App\Estabelecimento;

class EstabelecimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Estabelecimento::class, 10)->create();
    }
}
