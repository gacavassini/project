<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\Cliente;
use App\Base;
use App\Pedido;
use App\Entrevista;
use App\Peticao;
use App\PeticaoBase;
use App\PedidoPeticao;
use App\Events\PeticaoCriada;
use PDF;

class Peticoes extends Controller
{
    public function novo(){
    	$bases = Base::select('rotulo', 'codRot')->orderBy('codRot')->groupBy('rotulo', 'codRot')->get();
    	$pedidos = Pedido::all();
      $clientes = Cliente::all();
      $empresas = Empresa::all();
      $entrevistas = Entrevista::all();

    	return view('peticoes.novo', compact('empresas', 'clientes', 'bases',
        'pedidos', 'entrevistas'));
    }

    public function salvar(Request $req){
      $dados = $req->only(['codEntrevista', 'fatos']);
      $bases = array();
      $pedidos = array();

      //pega os valores dos inputs com os ids das bases
      $input = $req->all();
      $pattern = 'peticoesbases';
      array_walk($input, function ($v, $k) use ($pattern, &$bases) {
          if(starts_with($k, $pattern)) {
              $bases[$k] = $v;
          }
      });

      //pega os valores dos inputs com os ids dos pedidos
      $pattern = 'peticoespedidos';
      array_walk($input, function ($v, $k) use ($pattern, &$pedidos) {
          if(starts_with($k, $pattern)) {
              $pedidos[$k] = $v;
          }
      });

      //cria a peticao no banco
      Peticao::create($dados);

      //pega a ultima peticao criada
      $peticao = Peticao::orderBy('created_at', 'desc')->first();

      //cria as peticoes_bases usando o id da peticao q foi criada
      foreach($bases as $base){
        $peticaoBase = new PeticaoBase;
        $peticaoBase['codPeticao'] = $peticao->codPeticao;
        $peticaoBase['codBase'] = $base;
        $peticaoBase->save();
      }

      //cria os pedidos_peticoes usando o id da peticao q foi criada
      foreach($pedidos as $pedido){
        $pedPet = new PedidoPeticao;
        $pedPet['codPeticao'] = $peticao->codPeticao;
        $pedPet['codPedido'] = $pedido;
        $pedPet->save();
      }

      //faz o trigger do evento pós create, pra gerar o doc/pdf
      event(new PeticaoCriada($peticao));

      //retorna pra index
      //$pdf = \App::make('dompdf.wrapper');
      //$pdf->loadHtml($peticao->fatos);
      //return $pdf->stream();
      return redirect()->route('peticoes.index');
    }

    public function index(){
      $peticoes = Peticao::all();
      return view('peticoes.index', compact('peticoes'));
    }

    public function editar(){}

    public function atualizar(){}

    public function visualizarDocumento($id){
        $peticao = Peticao::where('codPeticao', $id)->first();
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHtml($peticao->fatos);
        return $dompdf->stream();
    }
}
