<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }

    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function profissional()
    {
        return $this->belongsToMany('App\Profissional');
    }
}
