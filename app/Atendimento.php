<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function estabelecimento()
    {
        return $this->belongsTo('App\Estabelecimento');
    }

    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional');
    }

    public function servicos()
    {
        return $this->belongsToMany('App\Servico');
    }

    public function pagamento()
    {
        return $this->hasOne('App\Pagamento');
    }

    public function produtos()
    {
        return $this->belongsToMany('App\Produto');
    }
}
