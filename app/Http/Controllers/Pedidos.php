<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;

class Pedidos extends Controller
{
	public function listar(){
      $pedidos = Pedido::all();
      return view('pedidos.listar', compact('pedidos'));
    }

    public function novo(){
      return view('pedidos.novo');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      Pedido::create($dados);
      return redirect()->route('pedidos.listar');
    }

    public function editar($id){
      $registro = Pedido::where('codPedido', $id)->first();
      return view('pedidos.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Pedido::where('codPedido', $id)->first()->update($dados);

      return redirect()->route('pedidos.listar');
    }

    public function visualizar($id){
      $registro = Pedido::where('codPedido', $id)->first();
      return view('pedidos.visualizar',compact('registro'));
    }

  public function getPedidosByCodJson($codPedido){
    $pedido = DB::table('pedidos')->where('codPedido', '=', $codPedido)->get()->first();
    return json_encode($pedido);
  }
}
