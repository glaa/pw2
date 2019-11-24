<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telefone', 'endereco_id', 'tipo_usuario'
    ];


    public static $rules= [
        'name' => 'required|min:5|max:100', 
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'telefone' => 'required|digits:11',
        'endereco_id' => 'required|exists:enderecos,id|unique:users,endreco_id',
        'tipo_usuario' => 'required|in:CLIENTE, ESTABELECIMENTO'
    ];

    public static $messages = [
        'name.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'email.required' => 'O campo email é obrigatório',
        'email.email' => 'O email está em um formato inválido',
        'email.unique:users,email' => 'O email já está em uso',
        'telefone.*' => 'O campo telefone é obrigatório e deve ter 11 digitos'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function endereco()
    {
        return $this->belongsTo('App\Endereco');
    }

    public function cliente()
    {
        return $this->hasOne('App\Cliente');
    }

    public function estabelecimento()
    {
        return $this->hasOne('App\Estabelecimento');
    }
}
