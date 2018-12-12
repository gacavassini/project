<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntrevistaQuestao extends Model
{
  //recisou disso pq procurava tabela peticaos
  protected $table = 'entrevistas_questoes';

  public function questao()
  {
      return $this->belongsTo('App\Questao', 'eq_codQuestao', 'codQuestao');
  }
}
