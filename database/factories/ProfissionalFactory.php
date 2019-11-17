<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profissional;
use Faker\Generator as Faker;

$factory->define(Profissional::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
    ];
});
