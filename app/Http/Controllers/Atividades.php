<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Atividades extends Controller
{
    public function listar(){

       //$atividades = Atividade::all();
    	return view('atividades.tela');

    }
}
