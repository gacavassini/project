<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codCliente', 'codEmpresa',
    ];

    public function cliente()
    {
        //belongsTo(modelPai, chaveModelPai, chaveModelAtual)
        return $this->belongsTo('App\Cliente', 'codCliente', 'codCliente');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'codEmpresa', 'codEmpresa');
    }

    public function peticao()
    {
        return $this->hasOne('App\Peticao', 'codEntrevista', 'codEntrevista');
    }

    public function entrevistasQuestoes()
    {
        return $this->hasMany('App\EntrevistaQuestao', 'eq_CodEntrevista', 'CodEntrevista');
    }
}
