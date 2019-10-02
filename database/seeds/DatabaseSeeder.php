<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfissionalTableSeeder::class);
        $this->call(ServicoTableSeeder::class);
        $this->call(PagamentoTableSeeder::class);
        $this->call(Solicita_servicoTableSeeder::class);
        $this->call(Servico_profissionalTableSeeder::class);
    }
}
