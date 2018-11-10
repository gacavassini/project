<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entrevista;
use App\Cliente;
use App\Empresa;

class Entrevistas extends Controller
{
    public function listar(){
      $entrevistas = Entrevista::all();
      return view('entrevistas.listar', compact('entrevistas'));
    }

    public function novo(){
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        return view('entrevistas.novo', compact('clientes', 'empresas'));
    }

    public function salvar(Request $req){
      $dados = $req->all();
      Entrevista::create($dados);
      return redirect()->route('entrevistas.listar');
    }

    public function editar($id){
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $registro = Entrevista::where('codEntrevista', $id)->first();
        return view('entrevistas.editar',compact('registro', 'clientes', 'empresas'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Entrevista::where('codEntrevista', $id)->first()->update($dados);

      return redirect()->route('entrevistas.listar');
    }

    public function visualizar($id){
      $registro = Entrevista::where('codEntrevista', $id)->first();
      return view('entrevistas.visualizar',compact('registro'));
    }


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
