<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servico;
use Faker\Generator as Faker;

$factory->define(Servico::class, function (Faker $faker) {
    return [
        'nome' =>$faker->randomElement(['Corte','Pintura','Alisamento','Escova','Penteado']),
        'categoria' => $faker->randomElement(['Cabelo','Barba','Maquiagem','Unhas','Sobrancelhas']),
        'descricao' => $faker->text,
        'preco' => $faker->randomFloat (3, 10, 100),
        'tempo' =>  $faker->randomElement([30,60,90,120,150,180]),
    ];
});
