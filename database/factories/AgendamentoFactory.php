<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agendamento;
use Faker\Generator as Faker;

$factory->define(Agendamento::class, function (Faker $faker) {
    return [
        'data' => $faker->date(),
        'hora' => $faker->time(),
        'cliente_id' => function(){
            return factory(\App\Cliente::class)->create()->id;
        },
        'agenda_id' => function(){
            return factory(\App\Agenda::class)->create()->id;
        }
    ];
});
