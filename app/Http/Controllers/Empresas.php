<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }
}
