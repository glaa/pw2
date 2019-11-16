<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public function servicos()
    {
        return $this->belongsToMany('App\Servico');
    }
    
    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
