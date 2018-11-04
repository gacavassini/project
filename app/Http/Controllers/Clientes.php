<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Cliente;
use App\Events\ClienteCriado;

class Clientes extends Controller
{

    public function novo(){
    	return view('clientes.novo');

    }
    public function salvar(Request $req){

        $dados = $req->all();


        $cliente = Cliente::create($dados);
        event(new ClienteCriado($cliente));
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

    public function indexJson($id){
        $cliente = DB::table('clientes')->where('codCliente', '=', $id)->get()->first();
        return json_encode($cliente);

    }
}
