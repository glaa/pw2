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
        'nome' => 'required|min:5|max:100',
        'quantidade' => 'required|numeric',
        'preco' => 'required|regex:/^\d+(\,\d{1,2})?$/',
        'desconto' => 'required|regex:/[(0\.\d{1,2})1]/',
        'descricao' => 'required|max:300',
        'estabelecimento_id' => 'required|exists:estabelecimentos,id',
    ];
    
    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'quantidade.*' => 'O campo quantidade é obrigatório',
        'preco.*' => 'O campo preço é obrigatório',
        'desconto.*' => 'O campo desconto é obrigatório',
        'descricao.*' => 'O campo descrição é obrigatório e deve conter no máximo 300 caracteres',
        'estabelecimento_id.*' => 'O produto deve pertencer a um estabelecimento',
    ];

    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento')->withPivot('atendimento_produto');
    }
}
