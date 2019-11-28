<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\User;
use App\Endereco;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){    
        $rules = Endereco::$rules + User::$rules + Cliente::$rules;
        $messages = Endereco::$messages + User::$messages + Cliente::$messages;
        
        $request->validate($rules, $messages);
        
        $endereco =  Endereco::create([
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'numero' => $request->numero,
        ]);
        
        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'telefone' => $request->telefone,
            'endereco_id' => $endereco->id,
            'tipo_usuario' => $request->tipo_usuario,
        ]);
        
      
        $cliente = Cliente([
            'apelido' => $request->apelido,
            'usuario_id' =>  $usuario->id,
        ]);

        //return redirect()->route('/create.cliente/{endereco}', comparct(['endereco']));
        
        
    }
}
