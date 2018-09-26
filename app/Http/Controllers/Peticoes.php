<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;

class Peticoes extends Controller
{
    public function novo(){
    	//$bases = Base::all();
    	//$pedidos = Pedido::all();
    	$empresas = Empresa::all();
    	return view('peticoes.novo', compact('empresas'));
    }

    public function salvar(){}

    public function index(){}

    public function editar(){}

    public function atualizar(){}
}
