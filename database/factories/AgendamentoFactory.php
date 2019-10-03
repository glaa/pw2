<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agendamento;
use Faker\Generator as Faker;

$factory->define(Agendamento::class, function (Faker $faker) {
    return [
        'data' => $faker->dateTime(),
        'hora' => $faker->time,
        'cliente_id' => 1,
        'agenda_id' => 1,
        
    ];
});
