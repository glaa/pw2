<?php

use Illuminate\Database\Seeder;

class ProfissionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Profissional::class, 10)->create();
    }
}
