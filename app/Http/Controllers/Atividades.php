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
        $hoje = new DateTime('today');
        while($hoje->format("w") == 0 || $hoje->format("w") == 6){
            $hoje->modify('+1 day');
        }
        $atrasados = Atividade::where('dataLimite', '<', $hoje->format('Y-m-d 00:00:00'))->get();
        $eletronicos = Atividade::where([
            ['dataLimite', '=', $hoje->format('Y-m-d')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicos = Atividade::where([
            ['dataLimite', '=', $hoje->format('Y-m-d')],
            ['tipo', '=', 'fisico']
        ])->get();

        //de amanha
        $amanha = new DateTime($hoje->format('Y-m-d 00:00:00'));
        $amanha = $amanha->modify('+1 day');
        while($amanha->format("w") == 0 || $amanha->format("w") == 6){
            $amanha->modify('+1 day');
        }
        $eletronicosTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicosTomorrow = Atividade::where([
            ['dataLimite', '=', $amanha->format('Y-m-d')],
            ['tipo', '=', 'fisico']
        ])->get();

        // de depois de amanha
        $depois = new DateTime($amanha->format('Y-m-d 00:00:00'));
        $depois = $depois->modify('+1 day');
        while($depois->format("w") == 0 || $depois->format("w") == 6){
            $depois->modify('+1 day');
        }
        $eletronicosAfterTomorrow = Atividade::where([
            ['dataLimite', '=', $depois->format('Y-m-d')],
            ['tipo', '=', 'eletronico']
        ])->get();
        $fisicosAfterTomorrow = Atividade::where([
            ['dataLimite', '=', $depois->format('Y-m-d')],
            ['tipo', '=', 'fisico']
        ])->get();

        //dd($eletronicosTomorrow);
    	return view('atividades.tela', compact('atrasados', 'eletronicos',
            'fisicos', 'eletronicosTomorrow', 'fisicosTomorrow',
            'eletronicosAfterTomorrow', 'fisicosAfterTomorrow', 'hoje', 'amanha', 'depois'));
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
        //$date = DateTime::createFromFormat('d/m/Y', $req->input('dataLimite'));
        //$date = $date->format('Y-m-d H:i:s');
        //$req->merge(array('dataLimite' => $date));
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
      $dados = $req->except('_token');
      //$dataLimite = $dados['datalimite'];
      //dd($dados);
      Atividade::where('codAtividade', $id)->update($dados);

      return redirect()->route('atividades.listar');
    }

    public function visualizar($id){
      $registro = Atividade::where('codAtividade', $id)->first();
      return view('atividades.visualizar',compact('registro'));
    }

    public function atualizaStatus($id){
        Atividade::where('codAtividade', $id)->update(['status' => false]);
        $registro = Atividade::where('codAtividade', $id)->first();
        return response('Atividade atualizada com sucesso', 200);
    }
}
