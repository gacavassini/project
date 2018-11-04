<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atividade;

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
      return view('atividades.novo');
    }
    public function salvar(){}
    public function editar(){}
    public function atualizar(){}
    public function visualizar(){}
}
