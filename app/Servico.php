<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    public function agendamentos()
    {
        return $this->belongsToMany('App\Agendamento');
    }

    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento');
    }
}
