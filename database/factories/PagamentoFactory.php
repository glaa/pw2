<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pagamento;
use Faker\Generator as Faker;

// Parcelamento e tipo tão confuso
$factory->define(Pagamento::class, function (Faker $faker) {
    return [
        'data' => $faker->date(),
        'valor' => $faker->randomFloat (3, 10, 100),
        'parcela' => random_int(1, 12),
        'tipo' => $faker->randomElement(['A_VISTA', 'CREDITO', 'DEBITO']),
    ];
});
