<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contrato;
use Faker\Generator as Faker;

$factory->define(Contrato::class, function (Faker $faker) {

    $profissionais = DB::table('profissionals')->pluck('id')->all();
    return [
        'cpf_cnpj' => $faker->numerify('###########'),
        'profissional_id' =>$faker->randomElement($profissionais)
    ];
});
