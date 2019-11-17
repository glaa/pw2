<?php

use Illuminate\Database\Seeder;

class AtendimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Atendimento::class, 50)->create();
    }
}
