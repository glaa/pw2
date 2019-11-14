<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua', 'bairro', 'cidade', 'estado', 'cep', 'numero'
    ];


    public static $rules= [
        'rua' => 'required|min:2|max:100', 
        'bairro' => 'required|min:2|max:40', 
        'cidade' => 'required|min:2|max:40', 
        'estado' => 'required|min:2|max:2', 
        'cep' => 'required|digits_between:8,8', 
        'numero' => 'required|digits',
    ];

    public static $messages = [
        'rua.*' => 'O campo rua é obrigatório',
        'bairro.*' => 'O campo bairro é obrigatório',
        'cidade.*' => 'O campo cidade é obrigatório',
        'estado.*' => 'O campo estado é obrigatório',
        'cep.*' => 'O campo cep é obrigatório e deve ter 11 dígitos',
        'numero.*' => 'O campo número é obrigatório'
    ];

    public function usuario()
    {
        return $this->hasMany('App\User');
    }
}
