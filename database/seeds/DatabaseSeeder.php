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
        $this->call(AtendimentosTableSeeder::class);
        //$this->call(EnderecosTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        /**$this->call(UsuarioTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(ProfissionalTableSeeder::class);
        $this->call(ServicoTableSeeder::class);
        $this->call(PagamentoTableSeeder::class);
        $this->call(AgendaTableSeeder::class);
        $this->call(AgendamentoTableSeeder::class);
        $this->call(ContratoTableSeeder::class);
        $this->call(DisponibilidadeTableSeeder::class);
        $this->call(Solicita_servicoTableSeeder::class);
        $this->call(Servico_profissionalTableSeeder::class);*/


    }
}
