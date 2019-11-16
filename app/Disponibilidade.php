<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidade extends Model
{
    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fim',
        'contrato_id',
    ];

    public static $rules = [
        'dia' => 'required|in: SEG , TER, QUA, QUI, SEX, SAB, DOM',
        'hora_inicio' => 'required|date_format:H:i',
        'hora_fim' => 'required|date_format:H:i',
        'contrato_id' => 'required|exists:contratos,id',        
    ];
    
    public static $messages = [
        'dia.*' => 'O campo dia é obrigatório',
        'hora_inicio.*' => 'A campo hora de início é obrigatório ',
        'hora_fim.*' => 'A campo hora de saída é obrigatório',
        'contrato_id.*' => 'O contrato entre o estabelecimento deve ser especificado',
    ];

    public function contrato()
    {
        return $this->belongsTo('App\Contrato');
    }
}
