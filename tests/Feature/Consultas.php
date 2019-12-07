<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Consultas extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testConsultarEstabelecimentoPorNome(){
        $estabelecimentos = \App\User::where('tipo_usuario','ESTABELECIMENTO')->get();

        $est1 = \App\User::where('tipo_usuario','ESTABELECIMENTO')->first();
        
        $resultado = false;
        
        foreach($estabelecimentos as $estabelecimento)
        {
            if($estabelecimento->name == $est1->name)
            {
                $resultado = true;
                break;
            }
        }
        
        $response = $this->assertTrue($resultado);
 
    }

    public function testTeste(){
        $response = $this->assertTrue(true);
    }

}
