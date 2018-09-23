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
        'numProcesso', 'atividade', 'tipo', 'qtdDia', 'prazo', 'dias',
          'dataLimite', 'atividadeStatus',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
