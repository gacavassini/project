<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'atividade', 'codCliente', 'numProcesso', 'prazo', 'tipo', 'dataDiarioOficial', 'dataLimite', 'observacao', 'dias',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'codCliente', 'codCliente');
    }
}
