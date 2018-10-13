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

    public function salvar(){}

    public function index(){
      $peticoes = Peticao::all();
      return view('peticoes.index', compact('peticoes'));
    }

    public function editar(){}

    public function atualizar(){}
}
