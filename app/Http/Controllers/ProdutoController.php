<?php

namespace App\Http\Controllers;

use App\Estabelecimento;
use Illuminate\Http\Request;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ProdutoController extends Controller
{   

    public function cadastrar(Request $request)
    {
        if (Auth::check() && Auth::user()->tipo_usuario == "ESTABELECIMENTO")
        {
            $estabelecimento = Estabelecimento::where('usuario_id',  Auth::user()->id)->first();

            Produto::create([
                'nome' => strtolower($request->nome),
                'preco' => $request->preco,
                'quantidade' => $request->quantidade,
                'desconto' => $request->desconto,
                'descricao' => $request->descricao,
                'estabelecimento_id' => $estabelecimento->id,
            ]);

            return view('cadastrarProduto');
        }
    }

    public function buscar(Request $request){
        $nome = $request->buscar;
        //$produtos = Produto::where('nome', 'like', '%$nome%')->get();
        $produtos = DB::table('produtos')->select('id','nome','preco', 'quantidade', 'desconto', 'descricao')
                    ->where('nome', 'like', '%'.$nome.'%')->get();
        return view('buscarProduto', ['nome' => $nome, 'produtos' => $produtos]);
    }

    public function visualizar($id){
        $produto = Produto::find($id);
        $estabelecimento = Estabelecimento::find($produto->estabelecimento_id);

        $nome = User::find($estabelecimento->usuario_id)->name;
        

        
        return view('comprarProduto', ['comprou' => False, 'nome_estabelecimento' => $nome, 'produto' => $produto]);
    }
}
