<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;

use App\Cliente;
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

/**Povoa a tabela cliente_estabelecimento, a qual representa um cadastro
 * do cliente no estabelecimento no banco, cujo o relacinamento é nxm
 *  
 */
$factory->afterCreating(App\Estabelecimento::class, function ($estabelecimento, $faker) {
    $arrey_clientes = [];

    for($i = 1; $i <= 4; $i++){
        array_push($arrey_clientes, $i);
    }

    $clientes = Cliente::find($arrey_clientes);
    $estabelecimento->clientes()->attach($clientes);

});
