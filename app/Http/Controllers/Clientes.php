<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;

class Clientes extends Controller
{
    
    public function novo(){
    	return view('clientes.novo');

    }
    public function salvar(Request $req){

        $dados = $req->all();
        

        Cliente::create($dados);
        return redirect()->route('clientes.listar');
        //return listar();

    }
    public function listar(){
        $registros = Cliente::all();
    	return view('clientes.listar', compact('registros'));
      
    }
}
