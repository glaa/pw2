<?php

use Illuminate\Database\Seeder;
use App\Endereco;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Endereco::class, 10)->create();
    }
}
