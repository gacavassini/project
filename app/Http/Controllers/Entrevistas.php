<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entrevista;

class Entrevistas extends Controller
{
    //
    public function indexJson($id){
      //$entrevistas = DB::table('entrevistas')->join('entrevistas_questoes', 'entrevistas.codEntrevista',
        //'=', 'entrevistas_questoes.eq_codEntrevista')->select('entrevistas.*', 'entrevistas_questoes.*')->where('entrevistas.codCliente', '=', $id)->get();
      $entrevistas = DB::table('entrevistas')->where('codCliente', '=', $id)->get();
      return json_encode($entrevistas);
    }
}
