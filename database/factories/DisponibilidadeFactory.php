<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disponibilidade;
use Faker\Generator as Faker;

$factory->define(Disponibilidade::class, function (Faker $faker) {
    return [
        'dia' =>$faker->randomElement(['SEG','TER','QUA','QUI','SAB','DOM']),
        'hora_inicio' =>$faker->randomElement(['08:00','07:00','13:00','14:00']),
        'hora_fim' =>$faker->randomElement(['17:00','18:00','19:00']),
        'contrato_id' => function(){
            return factory(\App\Contrato::class)->create()->id;
        }
    ];
});
