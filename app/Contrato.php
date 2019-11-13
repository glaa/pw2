<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    public function disponibilidades()
    {
        return $this->hasMany('App\Disponibilidade');
    }

    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function profissional()
    {
        return $this->belongsTo('App\Profissional');
    }
}
