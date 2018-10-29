<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests;
=======
>>>>>>> d8cf7610b81a435c6820ce0d3abb4d3da5c15eec
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
<<<<<<< HEAD
        $registros = Cliente::all();
    	return view('clientes.listar', compact('registros'));
      
=======
        $clientes = Cliente::all();
    	return view('clientes.listar', compact('clientes'));
>>>>>>> d8cf7610b81a435c6820ce0d3abb4d3da5c15eec
    }
}
