<?php

use Illuminate\Database\Seeder;
use App\Atendimento;
use App\Estabelecimento;
class AtendimentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Atendimento::class, 10)->create();
    }
}
