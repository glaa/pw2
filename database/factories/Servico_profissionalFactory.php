<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servico_profissional;
use Faker\Generator as Faker;

$factory->define(Servico_profissional::class, function (Faker $faker) {

    $profissionais = DB::table('profissionals')->pluck('id')->all();
    $servicos = DB::table('servicos')->pluck('id')->all();
    
    return [
        'profissional_id' => $faker->randomElement($profissionais),
        'servico_id' => $faker->randomElement($servicos)
    ];
});
