<?php

use Illuminate\Database\Seeder;
use App\Pagamento;

class PagamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pagamento::class, 10)->create();
    }
}
