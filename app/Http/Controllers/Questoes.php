<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questao;

class Questoes extends Controller
{
    public function listar(){
      $questoes = Questao::all();
      return view('questoes.listar', compact('questoes'));
    }

    public function novo(){
      return view('questoes.novo');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      Questao::create($dados);
      return redirect()->route('questoes.listar');
    }

    public function editar($id){
      $registro = Questao::where('codQuestao', $id)->first();
      return view('questoes.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Questao::where('codQuestao', $id)->first()->update($dados);

      return redirect()->route('questoes.listar');
    }

    public function visualizar($id){
      $registro = Questao::where('codQuestao', $id)->first();
      return view('questoes.visualizar',compact('registro'));
    }
}
