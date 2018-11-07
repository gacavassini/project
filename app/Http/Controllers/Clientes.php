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

        $cliente = Cliente::where('codCliente', $codCliente)->first();
        return view('clientes.editar', compact('cliente'));

    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        Cliente::where('codCliente', $id)->first()->update($dados);

        return redirect()->route('clientes.listar');
    }

    public function listar(){
        $clientes = Cliente::all();
        return view('clientes.listar', compact('clientes'));

    }

    public function visualizar($id){
      $registro = Cliente::where('codCliente', $id)->first();
      return view('cliente.visualizar',compact('registro'));
    }

    public function indexJson($id){
        $cliente = DB::table('clientes')->where('codCliente', '=', $id)->get()->first();
        return json_encode($cliente);

    }
}
