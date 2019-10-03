<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disponibilidade;
use Faker\Generator as Faker;

$factory->define(Disponibilidade::class, function (Faker $faker) {
    
    $contratos = DB::table('contratos')->pluck('id')->all();
    return [
        'dia' =>$faker->randomElement(['Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo']),
        'hora_inicio' =>$faker->randomElement(['08:00','07:00','13:00','14:00']),
        'hora_fim' =>$faker->randomElement(['17:00','18:00','19:00']),
        'contrato_id' =>$faker->randomElement($contratos)
    ];
});
