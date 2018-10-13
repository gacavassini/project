<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Base;

class Bases extends Controller
{
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
