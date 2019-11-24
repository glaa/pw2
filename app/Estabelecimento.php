<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = ['usario_id', 'cpf_cnpj'];

    public static $rules = [
        'cpf_cnpj' => 'required|cnpj',
        'usuario_id' => 'required|unique:users,id|exists:users,id',
    ];
    
    public static $messages = [
        'cpf_cnpj.required' => 'O campo cnpj/cpf é obrigatório',
        'cpf_cnpj.cnpj' => 'O cnpj inválido'
    ];


    public function clientes()
    {
        return $this->belongsToMany('App\Cliente')->withPivot('cliente_estabelecimento');;
    }

    public function agendas()
    {
        return $this->hasMany('App\Agenda');
    }
    
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    public function contratos()
    {
        return $this->hasMany('App\Contrato');
    }
    
    public function atendimentos()
    {
        return $this->hasMany('App\Atendimento');
    }

    public function produtos()
    {
        return $this->hasMany('App\Produto');
    }
}
