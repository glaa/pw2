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
        $this->call(ClientesTableSeeder::class);
        $this->call(EstabelecimentosTableSeeder::class);
        $this->call(PagamentosTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        $this->call(ProfissionalsTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
        $this->call(AtendimentosTableSeeder::class);
        $this->call(ContratosTableSeeder::class);
        $this->call(DisponibilidadesTableSeeder::class);
        $this->call(AgendamentosTableSeeder::class);
    }
}
