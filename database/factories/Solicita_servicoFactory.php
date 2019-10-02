<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Solicita_servico;
use Faker\Generator as Faker;

$factory->define(Solicita_servico::class, function (Faker $faker) {
    
    $servicos = DB::table('servicos')->pluck('id')->all();
    return [
        'agendamento_id' => 1,
        'servico_id' => $faker->randomElement($servicos)
    ];
});
