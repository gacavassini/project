<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atividade;
use App\Cliente;

class Atividades extends Controller
{
    public function tela(){
    	return view('atividades.tela');
    }

    public function listar(){
      $atividades = Atividade::all();
      return view('atividades.listar', compact('atividades'));
    }

    public function novo(){
      $clientes = Cliente::all();
      return view('atividades.novo', compact('clientes'));
    }

    public function salvar(Request $req){
      $dados = $req->all();
      //dd($dados);
      Atividade::create($dados);
      return redirect()->route('atividades.listar');
    }

    public function editar($id){
      $clientes = Cliente::all();
      $registro = Atividade::where('codAtividade', $id)->first();
      return view('atividades.editar',compact('registro', 'clientes'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Atividade::where('codAtividade', $id)->first()->update($dados);

      return redirect()->route('atividades.listar');
    }

    public function visualizar($id){
      $registro = Atividade::where('codAtividade', $id)->first();
      return view('atividades.visualizar',compact('registro'));
    }
}
