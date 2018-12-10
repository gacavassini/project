<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Base;

class Bases extends Controller
{
	public function listar(){
      $bases = Base::all();
      return view('bases.listar', compact('bases'));
    }

    public function novo(){
      return view('bases.novo');
    }

    public function salvar(Request $req){
      $dados = $req->all();
      Base::create($dados);
      return redirect()->route('bases.listar');
    }

    public function editar($id){
      $registro = Base::where('codBase', $id)->first();
      return view('bases.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
      $dados = $req->all();

      Base::where('codBase', $id)->update(['rotulo' => $dados['rotulo'], 'texto' => $dados['texto']]);

      return redirect()->route('bases.listar');
    }

	public function excluir($id){
		Base::where('codBase', $id)->delete();
		return response()->json(['success'=>"Base Deleted successfully.", 'tr'=>'tr_'.$id]);
	}

    public function visualizar($id){
      $registro = Base::where('codBase', $id)->first();
      return view('bases.visualizar',compact('registro'));
    }

  //
  public function getBasesPorRotuloJson($codRot){
    $bases = DB::table('bases')->where('codRot', '=', $codRot)->get();
    return json_encode($bases);
  }

  public function getBaseJson($codRot){
    $base = DB::table('bases')->where('codRot', '=', $codRot)->get()->first();
    return json_encode($base);
  }
}
