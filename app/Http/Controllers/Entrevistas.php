<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entrevista;
use App\Cliente;
use App\Empresa;
use App\Questao;
use App\EntrevistaQuestao;
use App\Events\EntrevistaCriada;
use PDF;

class Entrevistas extends Controller
{
    public function listar(){
      $entrevistas = Entrevista::all();
      return view('entrevistas.listar', compact('entrevistas'));
    }

    public function novo(){
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $questoes = Questao::all();
        return view('entrevistas.novo', compact('clientes', 'empresas', 'questoes'));
    }

    public function salvar(Request $req){
      $dados = $req->only(['codCliente', 'codEmpresa']);
      Entrevista::create($dados);

      //pega a ultima entrevista criada
      $entrevista = Entrevista::orderBy('created_at', 'desc')->first();

      $equestoes = $req->except(['codCliente', 'codEmpresa', '_token']);
      //cria as entrevistas_questoes usando o id da entrevista q foi criada
      //percorre os inputs das perguntas onde $key = nome do input e $value é o valor digitado na caixa de texto
      foreach($equestoes as $key => $value){
        if($value != ""){
            $entrevistaQ = new EntrevistaQuestao;
            $entrevistaQ['eq_codEntrevista'] = $entrevista->codEntrevista;
            $entrevistaQ['eq_codQuestao'] = $key;
            $entrevistaQ['descResposta'] = $value;
            $entrevistaQ->save();
        }
      }

      event(new EntrevistaCriada($entrevista));
      return redirect()->route('entrevistas.listar');
    }

    public function editar($id){
        $clientes = Cliente::all();
        $empresas = Empresa::all();
        $questoes = Questao::all();
        $registro = Entrevista::where('codEntrevista', $id)->first();
        return view('entrevistas.editar',compact('registro', 'clientes', 'empresas', 'questoes'));
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

    public function visualizarDocumento($id){
        $entrevista = Entrevista::where('codEntrevista', $id)->first();
        $dompdf = \App::make('dompdf.wrapper');

        $html = '<h2>Entrevista '.$entrevista->cliente->nome.' na '.$entrevista->created_at.'</h2>';
        foreach($entrevista->entrevistasQuestoes as $eq){
            $html .= '<p><strong>'.$eq->questao->descQuestao.'</strong>: '.$eq->descResposta.'</p>';
        }
        $html .= "<br><br><br><p style='text-align: justify; '> Afirmo que as informações deste
    documento foram declaradas por mim e poderão ser usadas em um processo judicial. </p> <br><br>";
        $html .= '<div style="width: 95%;display: inline-block; margin-left: 220px;" >';
        $html .= '<div style="width: 40%; text-align: center; display: inline-block;"> ';
        $html .= '<p>  ___________________________________________<br>  '.$entrevista->cliente->nome.' <br> '.$entrevista->cliente->cpf.'</p></div>';
        $html .= '<div style="width: 40%; text-align: center;"> ';
        $html .= '<p><br><br>  ___________________________________________<br>  Advogado <br></p></div></div>';

        $dompdf->loadHtml($html);
        return $dompdf->stream();
    }
}
