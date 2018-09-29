<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
  //recisou disso pq procurava tabela peticaos
  protected $table = 'questoes';
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
        return $this->belongsToMany('App\Entrevista', 'entrevistas_questoes');
    }
}
