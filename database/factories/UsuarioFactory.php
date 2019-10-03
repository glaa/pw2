<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'senha' => password_hash(Str::random(10), PASSWORD_DEFAULT),
        'nome' =>$faker->name,
        'telefone' => $faker->phoneNumber,
        'tipo_usuario' => 'cliente'
    ];
});
