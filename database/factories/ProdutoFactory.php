<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->word,
        'quantidade' => random_int(0, 1000),
        'preco' => $faker->randomFloat (3, 10, 100),
        'desconto' => $faker->randomFloat (3, 0, 1),
        'descricao' => $faker->text,
        'estabelecimento_id' => function(){
            return factory(App\Estabelecimento::class)->create()->id;
        },
    ];
});
