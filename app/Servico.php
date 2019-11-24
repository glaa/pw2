<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'nome',
        'categoria', 
        'descricao',
        'preco',
        'tempo',
    ];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'categoria' => 'required|in:CABELO, BARBA, MAQUIAGEM, UNHAS, SOBRANCELHAS', 
        'descricao' => 'required|max:300',
        'preco' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'tempo' => 'required|numeric',        
    ];
    
    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'categoria.*' => 'O campo categoria é obrigatório', 
        'descricao.*' => 'O campo descrição é obrigatório e deve conter no máximo 300 caracteres',
        'preco.*' => 'O campo preço é obrigatório',
        'tempo.*' => 'O campo tempo é obrigatório',
    ];

    public function agendamentos()
    {
        return $this->belongsToMany('App\Agendamento')->withPivot('agendamento_servico');
    }

    public function profissionais()
    {
        return $this->belongsToMany('App\Profissional','servico_profissional')->withPivot('servico_profissional');
    }

    public function atendimentos()
    {
        return $this->belongsToMany('App\Atendimento')->withPivot('atendimento_servico');
    }
}
