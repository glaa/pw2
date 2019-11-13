<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public function atendimento()
    {
        return $this->hasOne('App\Atendimento');
    }
}
