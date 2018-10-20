<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Empresas extends Controller
{
     public function novo(){
    	return view('empresas.novo');
    }

    public function salvar(){
    	return view('empresas.salvar');
    }

    public function listar(){
    	return view('empresas.listar');
    }
}
