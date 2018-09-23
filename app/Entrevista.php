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
        'descResposta',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    public function questoes()
    {
        return $this->belongsToMany('App\Questao', 'entrevista_questoes');
    }
}
