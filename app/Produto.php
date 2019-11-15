<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'quantidade',
        'preco',
        'desconto',
        'descricao',
        'estabelecimento_id',
    ];

    public static $rules = [
        'nome' => 'required',
        'quantidade' => 'required|numeric',
        'preco' => 'required|regex:/^\d+(\,\d{1,2})?$/',
        'desconto' => 'required|regex:/[(0\,\d{1,2})1]/',
        'descricao' => 'required',
        'estabelecimento_id' => 'required|exists:estabelecimentos,id',
    ];
    
    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório',
        'quantidade.*' => 'O campo quantidade é obrigatório',
        'preco.*' => 'O campo preço é obrigatório',
        'desconto.*' => 'O campo desconto é obrigatório',
        'descricao.*' => 'O campo descrição é obrigatório',
        'estabelecimento_id.*' => 'O produto deve pertencer a um estabelecimento',

        'data.*' => 'O campo data é obrigatório',
        'valor.*' => 'O campo valor é obrigatório',
        'parcela.*' => 'O campo parcela é obrigatório',
        'tipo.*' => 'O campo forma de pagamento é obrigatório', 
    ];

    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento');
    }
}
