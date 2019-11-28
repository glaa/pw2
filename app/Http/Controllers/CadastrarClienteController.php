<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\User;
use App\Endereco;

class CadastrarClienteController extends Controller
{
    public function cadastrar(Request $request){    
        $rules = Endereco::$rules + User::$rules + Cliente::$rules;
        $messages = Endereco::$messages + User::$messages + Cliente::$messages;
        
        $request->validate($rules, $messages);
        
        /**$endereco =  new Endereco();
        $endereco->rua = $request->rua;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->cep = $request->cep; 
        $endereco->numero = $request->numero;
    
        error_log($endereco->save());*/

        $endereco =  Endereco::create([
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'numero' => $request->numero,
        ]);

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->telefone = $request->telefone;
        $usuario->endereco_id = $endereco->id;
        $usuario->tipo_usuario = $request->tipo_usuario;
      
        $usuario->save();

        $cliente = new Cliente();
        $cliente->apelido = $request->apelido;
        $cliente->usuario_id =  $usuario->id;
        
        $cliente->save();


        
    }
}
