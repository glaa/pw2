<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pagamento;
use Faker\Generator as Faker;

//$tipo->

$factory->define(Pagamento::class, function (Faker $faker) {
    return [
        'data' => $faker->dateTime(),
        'valor' => $faker->randomFloat(6,10,6000),
        'parcela' => $faker->randomDigitNot(0),
        'tipo' => $faker->randomElement(['À vista','Crédito','Débito']),
    ];
});
