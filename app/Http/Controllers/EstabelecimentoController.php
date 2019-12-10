<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Endereco;
use App\User;
use App\Estabelecimento;
use App\Produto;

class EstabelecimentoController extends Controller
{
    public function cadastrar(Request $request){    
        $rules = Endereco::$rules + User::$rules + Estabelecimento::$rules;
        $messages = Endereco::$messages + User::$messages + Estabelecimento::$messages;
        
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
            'password' => Hash::make($request->password),
            'telefone' => $request->telefone,
            'endereco_id' => $endereco->id,
            'tipo_usuario' => $request->tipo_usuario,
        ]);
        
    
        Estabelecimento::create([
            'cpf_cnpj' => $request->cpf_cnpj,
            'usuario_id' =>  $usuario->id,
        ]);
        
        return redirect()->route('home');

    }


    public function listarProdutos(){
        $estabelecimento = Estabelecimento::where('usuario_id',  Auth::user()->id)->first();
        $produtos = $estabelecimento->produtos()->get();
        return view ("listarMeusProdutos",[
            'produtos' => $produtos]);
    }


    public function compra($id){
        $produto = Produto::find($id);
        $estabelecimento = Estabelecimento::find($produto->estabelecimento_id);
    }
}