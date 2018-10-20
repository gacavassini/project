<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    public function novo(){
    	return view('clientes.novo');
    }

    public function salvar(){
    	return view('clientes.salvar');
    }
    public function listar(){
    	return view('clientes.listar');
    }
}
