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
    protected $fillable = ['apelido', 'usuario_id'];

    public static $rules = [
        'apelido' => 'required|max:40',
        //'usuario_id' => 'required|unique:users,id|exists:users,id',
    ];
    
    public static $messages = [
        'apelido.*' => 'O campo apelido é obrigatório e deve ter no máximo 40 caracteres'
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
