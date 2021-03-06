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
    protected $fillable = [
        'nome', 'rua', 'numEndereco', 'bairro', 'cep', 'cidade', 'complemento', 'cpf',
        'rg', 'profissao', 'email', 'telefoneRes', 'telefoneContato',
        'celular', 'estadoCivil', 'cliStatus',
    ];

    public function listar ()
    {
     return $this->hasMany('App\Cliente');
    }

    public function entrevistas()
    {
        return $this->hasMany('App\Entrevista', 'codCliente', 'codCliente');
    }

    public function atividades()
    {
        return $this->hasMany('App\Atividade');
    }
}
