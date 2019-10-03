<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    return [
    
        'rua' => $faker->streetName,
        'cidade' => $faker->city,
        'estado' => $faker->state,
        'bairro' => $faker->stateAbbr,
        'numero' => $faker->buildingNumber,
        'cep' => $faker->postcode
    ];
});
