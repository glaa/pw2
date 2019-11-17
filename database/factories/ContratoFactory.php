<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contrato;
use Faker\Generator as Faker;

$factory->define(Contrato::class, function (Faker $faker) {
    return [
        'estabelecimento_id' => function(){
            return factory(\App\Estabelecimento::class)->create()->id;
        },
        'profissional_id' => function(){
            return factory(\App\Profissional::class)->create()->id;
        }
    ];
});
