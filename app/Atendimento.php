<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{

    protected $fillable = [
        'estabelecimento_id', 
        'cliente_id', 
        'pagamento_id',    
        'data',
    ];

    public static $rules = [
        'estabelecimento_id' => 'required|exists:estabelecimentos,id', 
        'cliente_id' => 'required|exists:clientes,id', 
        'pagamento_id' => 'required|exists:pagamentos,id|unique:pagamentos,id',    
        'data' => 'required|date',
        
    ];
    
    public static $messages = [
        'estabelecimento_id.*' => 'Um atendimento deve obrigatoriamente ser realizado por um estabelecimento', 
        'cliente_id.*' => 'Um atendimento deve obrigatoriamente ter cliente atendido', 
        'pagamento_id.*' => 'Ao o final do atendimento tem que haver um pagamento',    
        'data.*' => 'A data da realização do atendimento é obrigatória',
    ];

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
        return $this->belongsToMany('App\Profissional')->withPivot('atendimento_profissional');
    }

    public function servicos()
    {
        return $this->belongsToMany('App\Servico')->withPivot('atendimento_servico');
    }

    public function pagamento()
    {
        return $this->hasOne('App\Pagamento');
    }

    public function produtos()
    {
        return $this->belongsToMany('App\Produto')->withPivot('atendimento_produto');
    }
}
