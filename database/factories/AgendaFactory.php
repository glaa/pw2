<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Agenda;

$factory->define(Agenda::class, function (Faker $faker) {
    return [
        'estabelecimento_id' => function(){
            return factory(\App\Estabelecimento::class)->create()->id;
        },
        'profissional_id' => function(){
            return factory(\App\Profissional::class)->create()->id;
        },
    ];
});
