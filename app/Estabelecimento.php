<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    public function clientes()
    {
        return $this->belongsToMany('App\Cliente');
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
