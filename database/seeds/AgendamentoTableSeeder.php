<?php

use Illuminate\Database\Seeder;

class AgendamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Agendamento::class, 5)->create();
    }
}
