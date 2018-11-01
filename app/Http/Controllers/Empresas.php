<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Empresas extends Controller
{
    public function novo(){
    	return view('empresas.novo');
    }

    public function salvar(){
    	return view('empresas.salvar');
    }

    public function listar(){
        $empresas = Empresas::all();
    	return view('empresas.listar', compact('empresas'));
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
