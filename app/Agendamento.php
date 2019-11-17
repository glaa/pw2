<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'data',
        'hora',
        'cliente_id',
        'agenda_id',
    ];

    public static $rules = [
        'data' => 'required|date',
        'hora' => 'required|date_format:H:i',
        'cliente_id' => 'required|exists:clientes,id',
        'agenda_id' => 'required|exists:agendas,id',
    ];
    
    public static $messages = [
        'data.*' => 'A data do agendamento é obrigatório',
        'hora.*' => 'A hora do agendamento é obrigatório',
        'cliente_id.*' => 'O cliente que fez o agendamento deve ser especificado',
        'agenda_id.*' => 'A agenda do profissional deve ser especificado',
    ];

    public function servicos()
    {
        return $this->belongsToMany('App\Servico')->withPivot('agendamento_servico');
    }
    
    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional')->withPivot('agendamento_profissional');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
