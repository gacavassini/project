<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pedido;

class Pedidos extends Controller
{
  public function getPedidosByCodJson($codPedido){
    $pedido = DB::table('pedidos')->where('codPedido', '=', $codPedido)->get()->first();
    return json_encode($pedido);
  }
}
