<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class Clientes extends Controller
{
    public function novo(){
    	return view('clientes.novo');
    }
    public function salvar(){
    	return view('clientes.salvar');
    }
    public function listar(){
        $clientes = Cliente::all();
    	return view('clientes.listar', compact('clientes'));
    }
}
