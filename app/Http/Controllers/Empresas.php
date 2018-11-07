<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Empresa;


class Empresas extends Controller
{
    public function novo(){
    	return view('empresas.novo');
    }

    public function salvar(Request $req){
        
        $dados = $req->all();
        
        Empresa::create($dados);
        return redirect()->route('empresas.listar');
    }

    public function listar(){

    	$empresas = Empresa::all();
        return view('empresas.listar', compact('empresas'));

        $empresas = Empresas::all();
    	return view('empresas.listar', compact('empresas'));
    }

    public function editar($id){
      $empresa = Empresa::where('codEmpresa', $id)->first();
      return view('empresas.editar',compact('empresa'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Empresa::where('codEmpresa', $id)->first()->update($dados);

      return redirect()->route('empresas.listar');
    }

    public function visualizar($id){
      $empresa = Empresa::where('codEmpresa', $id)->first();
      return view('empresas.visualizar',compact('empresa'));
    }

    public function empresaPelaEntrevistaJson($codEntrevista){
        /*select e.* from empresas e
            inner join entrevistas en on en.codEmpresa = e.codEmpresa
            where en.codEntrevista = $codEntrevista;*/
        $empresa = DB::table('empresas')->
            join('entrevistas', 'empresas.codEmpresa', '=', 'entrevistas.codEmpresa')->
            select('empresas.*')->where('entrevistas.codEntrevista', '=', $codEntrevista)->get()->first();
        return json_encode($empresa);

    }
}
