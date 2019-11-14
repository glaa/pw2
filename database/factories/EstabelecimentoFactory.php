<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;
use JansenFelipe\FakerBR\FakerBR;
use App\Estabelecimento;

$factory->define(Estabelecimento::class, function (Faker $faker) {
    $faker->addProvider(new FakerBR($faker));
    return [
        'cpf_cnpj' =>$faker->cnpj,
        'usuario_id' => function(){
            $user =  factory(\App\User::class)->create(['tipo_usuario'=>'ESTABELECIMENTO']);
            return $user->id;
        },
    ];
});
