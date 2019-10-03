<?php

use Illuminate\Database\Seeder;

class ProfissionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Profissional::class, 5)->create();  
    }
}
