<?php

use Illuminate\Database\Seeder;

class PagamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pagamento::class, 5)->create(); 
    }
}
