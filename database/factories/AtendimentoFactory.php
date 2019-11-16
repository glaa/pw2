<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Atendimento;
use App\Estabelecimento;
use App\Cliente;
use App\Pagamento;
use Faker\Generator as Faker;

$factory->define(Atendimento::class, function (Faker $faker) {
    return [
        'estabelecimento_id' => function(){
            return factory(\App\Estabelecimento::class)->create()->id;
        },
        'cliente_id' => function(){
            return factory(\App\Cliente::class)->create()->id;
        }, 
        'pagamento_id' => function(){
            return factory(\App\Pagamento::class)->create()->id;
        },    
        'data' => $faker->date(),
    ];
});
