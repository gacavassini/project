<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entrevista;

class Entrevistas extends Controller
{
    //
    public function indexJson($id){
      $entrevistas = DB::table('entrevistas')->where('codCliente', '=', $id)->get();
      return json_encode($entrevistas);
    }

    public function questoesJson($id){
    	/*
		select * from entrevistas_questoes eq
			inner join entrevistas e on e.codEntrevista = eq.eq_codEntrevista
    		inner join questoes q on q.codQuestao = eq.eq_codQuestao
    		where entrevistas.codEntrevista = $id
    	*/
    	$questoes = $empresa = DB::table('entrevistas_questoes')->
    		join('entrevistas', 'entrevistas_questoes.eq_codEntrevista', '=', 'entrevistas.codEntrevista')->
    		join('questoes', 'entrevistas_questoes.eq_codQuestao', '=', 'questoes.codQuestao')->
        join('clientes', 'entrevistas.codCliente', '=', 'clientes.codCliente')->
    		where('entrevistas.codEntrevista', '=', $id)->get();
    	return json_encode($questoes);
    }
}
