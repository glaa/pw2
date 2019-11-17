<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $fillable = [
        'nome',
    ];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        
    ];
    
    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
    ];

    public function agendamentos()
    {
        return $this->belongsToMany('App\Agendamento')->withPivot('agendamento_profissional');
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
        return $this->belongsToMany('App\Atendimento')->withPivot('atendimento_profissional');
    }

    public function servicos()
    {
        return $this->belongsToMany('App\Servico')->withPivot('servico_profissional');
    }
}
