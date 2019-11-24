<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agendamento;
use Faker\Generator as Faker;

$factory->define(Agendamento::class, function (Faker $faker) {
    return [
        'data' => $faker->date(),
        'hora' => $faker->time(),
        'cliente_id' => function(){
            return factory(\App\Cliente::class)->create()->id;
        },
        'agenda_id' => function(){
            return factory(\App\Agenda::class)->create()->id;
        }
    ];
});

/**Povoa a tabela agendamento_profissional, cujo o relacinamento são nxm
 *  
 */
$factory->afterCreating(App\Agendamento::class, function ($agendamento, $faker) {
    $arrey_profissionais = [];
    $arrey_servicos = [];

    for($i = 1; $i <= 4; $i++){
       array_push($arrey_profissionais, factory(App\Profissional::class)->create()->id);
       array_push($arrey_servicos, factory(App\Servico::class)->create()->id);
    }

    $profissionais = App\Profissional::find($arrey_profissionais);
    $agendamento->profissionais()->attach($profissionais);

    $servicos = App\Servico::find($arrey_servicos);
    $agendamento->servicos()->attach($servicos);
});
