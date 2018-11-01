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

     public function editar($codCliente){

        $clientes = Cliente::find($codCliente);
        return view('clientes.editar', compact('clientes'));

    }

    public function atualizar(){

    }
    public function listar(){

        $clientes = Cliente::all();
    	return view('clientes.listar', compact('clientes'));

    }
}
