<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'data',
        'valor',
        'parcela',
        'tipo',
    ];

    public static $rules = [
        'data' => 'required|date',
        'valor' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'parcela' => 'required|numeric',
        'tipo' => 'required|in A_VISTA, CREDITO, DEBITO',        
    ];
    
    public static $messages = [
        'data.*' => 'O campo data é obrigatório',
        'valor.*' => 'O campo valor é obrigatório',
        'parcela.*' => 'O campo parcela é obrigatório',
        'tipo.*' => 'O campo forma de pagamento é obrigatório', 
    ];

    public function atendimento()
    {
        return $this->hasOne('App\Atendimento');
    }
}
