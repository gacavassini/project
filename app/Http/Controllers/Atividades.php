<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atividade;
use App\Cliente;
use DateTime;

class Atividades extends Controller
{
    public function tela(){
        // de hoje
        $atrasados = Atividade::where('dataLimite', '<', date('Y-m-d 00:00:00'))->get();
        $eletronicos = Atividade::where([
            ['dataLimite', '=', date('Y-m-d 00:00:00')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicos = Atividade::where([
            ['dataLimite', '=', date('Y-m-d 00:00:00')],
            ['tipo', '=', 'fisico']
        ])->get();

        //de amanha
        $amanha = new DateTime('tomorrow');
        $eletronicosTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d H:i:s')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicosTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d H:i:s')],
            ['tipo', '=', 'fisico']
        ])->get();

        // de depois de amanha
        $amanha->modify('+1 day');
        $eletronicosAfterTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d H:i:s')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicosAfterTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d H:i:s')],
            ['tipo', '=', 'fisico']
        ])->get();

    	return view('atividades.tela', compact('atrasados', 'eletronicos',
            'fisicos', 'eletronicosTomorrow', 'fisicosTomorrow',
            'eletronicosAfterTomorrow', 'fisicosAfterTomorrow'));
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
        $date = DateTime::createFromFormat('d/m/Y', $req->input('dataLimite'));
        $date = $date->format('Y-m-d H:i:s');
        $req->merge(array('dataLimite' => $date));
        $dados = $req->all();
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
