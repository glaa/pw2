<?php

use Illuminate\Database\Seeder;
use App\Profissional;

class ProfissionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profissional::class, 10)->create();
    }
}
