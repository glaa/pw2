<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servico;
use Faker\Generator as Faker;

$factory->define(Servico::class, function (Faker $faker) {
    return [
        'nome' =>$faker->randomElement(['Corte','Pintura','Alisamento','Escova','Penteado']),
        'categoria' => $faker->randomElement(['CABELO', 'BARBA', 'MAQUIAGEM', 'UNHAS', 'SOBRANCELHAS']),
        'descricao' => $faker->text,
        'preco' => $faker->randomFloat (3, 10, 100),
        'tempo' =>  $faker->randomElement([30,60,90,120,150,180]),
    ];
});

/**Povoa a tabela atendimento_produto, atendimento_servico e atendimento_profissional, 
 *, cujo o relacinamento são nxm
 *  
 */
$factory->afterCreating(Servico::class, function ($servico, $faker) {
    $arrey_profissionais = [];

    for($i = 1; $i <= 4; $i++){
       array_push($arrey_profissionais, factory(App\Profissional::class)->create()->id);
    }

    $profissionais = App\Produto::find($arrey_profissionais);
    $servico->produtos()->attach($profissionais);
});

