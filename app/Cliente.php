<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usario_id', 'apelido'];

    public static $rules = [
        'apelido' => 'required|min:5|max:40',
        //'usuario_id' => 'required|unique:users,id|exists:users,id',
    ];
    
    public static $messages = [
        'apelido.*' => 'O campo apelido é obrigatório e deve ter entre 5 e 40 caracteres'
    ];
    
    public function usuario()
    {
        return $this->belongnsTo('App\User');
    }

    public function estabelecimentos()
    {
        return $this->belongsToMany('App\Estabelecimento')->withPivot('cliente_estabelecimento');
    }

    public function atendimentos()
    {
        return $this->hasMany('App\Atendimento');
    }

    public function agendamentos()
    {
        return $this->hasMany('App\Agendamento');
    }
}
