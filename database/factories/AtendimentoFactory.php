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
            return factory(Estabelecimento::class)->create()->id;
        },
        'cliente_id' => function(){
            return factory(Cliente::class)->create()->id;
        }, 
        'pagamento_id' => function(){
            return factory(Pagamento::class)->create()->id;
        },    
        'data' => $faker->date(),
    ];
});

/**Povoa a tabela atendimento_produto, atendimento_servico e atendimento_profissional, 
 *, cujo o relacinamento são nxm
 *  
 */
$factory->afterCreating(Atendimento::class, function ($atendimento, $faker) {
    $arrey_servicos = [];
    $arrey_profissionais = [];
    $arrey_produtos = [];

    for($i = 1; $i <= 4; $i++){
        array_push($arrey_servicos, $i);
        array_push($arrey_produtos, factory(App\Produto::class)->create(['estabelecimento_id' => $atendimento->estabelecimento_id])->id);
        array_push($arrey_profissionais, factory(App\Profissional::class)->create()->id);
    }

    $servicos = App\Servico::find($arrey_servicos);
    $atendimento->servicos()->attach($servicos);

    $produtos = App\Produto::find($arrey_produtos);
    $atendimento->produtos()->attach($produtos);

    $profissionais = App\Produto::find($arrey_profissionais);
    $atendimento->produtos()->attach($profissionais);
});
