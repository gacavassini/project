<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
       $clientes = Cliente::all();
    	return view('clientes.listar', compact('clientes'));

    }

    public function indexJson($id){
        $cliente = DB::table('clientes')->where('codCliente', '=', $id)->get()->first();
        return json_encode($cliente);
    }
}
