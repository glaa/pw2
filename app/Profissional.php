<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    public function agendamentos()
    {
        return $this->belongsToMany('App\Agendamento');
    }

    public function contratos()
    {
        return $this->hasMany('App\Contrato');
    }

    public function agendas()
    {
        return $this->hasMany('App\Agenda');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento');
    }

    public function servicos()
    {
        return $this->belongsToMany('App\Servico');
    }
}
