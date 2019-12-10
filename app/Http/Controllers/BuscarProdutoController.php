<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscarProdutoController extends Controller
{
    public function buscar($nome = ""){

        $produtos = DB::table('produtos')->select('id','nome','preco','descricao')
                    ->where('nome', 'like', '%'.$nome.'%')->get();

        return view('buscar',['produtos' => $produtos]);
    }
}
