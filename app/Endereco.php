<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function usuario()
    {
        return $this->hasMany('App\User');
    }
}
