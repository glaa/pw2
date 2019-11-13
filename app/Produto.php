<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento');
    }
}
