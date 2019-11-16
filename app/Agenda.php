<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'estabelecimento_id',
        'profissional_id',
    ];

    public static $rules = [
        'estabelecimento_id' => 'required|exists:estabelecimentos,id',
        'profissional_id' => 'required|exists:profissionals,id',
    ];
    
    public static $messages = [
        'estabelecimento_id.*' => 'A agenda do profissional deve pertencer a um estabelecimento',
        'profissional_id.*' => 'A agenda deve está vinculada a um profissional',
    ];

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
