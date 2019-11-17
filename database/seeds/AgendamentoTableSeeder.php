<?php

use Illuminate\Database\Seeder;
use App\Agendamento;

class AgendamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agendamento::class, 50)->create();
    }
}
