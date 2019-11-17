<?php

use Illuminate\Database\Seeder;
use App\Agendamento;

class AgendamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agendamento::class, 10)->create();
    }
}
