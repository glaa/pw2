<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;
use App\Cliente;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'apelido' => $faker->firstName(),
        'usuario_id' => function(){
            $user =  factory(\App\User::class)->create(['tipo_usuario'=>'CLIENTE']);
            return $user->id;
        },
    ];
});
