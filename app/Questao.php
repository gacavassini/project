<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descQuestao', 'tipo',
    ];

    public function entrevistas()
    {
        return $this->belongsToMany('App\Entrevista', 'entrevista_questoes');
    }
}
