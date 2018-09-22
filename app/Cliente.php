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

    public function ProcurarCliente($nome){
      $cliente = DB::table('clientes')->where('nome', $nome)->first();

      echo $cliente->nome;
    }
}
