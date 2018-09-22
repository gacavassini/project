<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'rua', 'numEndereco', 'bairro', 'cep', 'cidade', 'complemento',
        'cnpj', 'telefone',
    ];
}
