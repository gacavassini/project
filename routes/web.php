<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware'=>'auth'],function(){
  //rota da home
  Route::get('/',['as'=>'home','uses'=>'Home@index']);

  //rota de peticoes
  Route::get('/peticoes/novo',['as'=>'peticoes.novo','uses'=>'Peticoes@novo']);
  Route::get('/peticoes/editar',['as'=>'peticoes.editar','uses'=>'Peticoes@editar']);
  Route::get('/peticoes',['as'=>'eticoes.index','uses'=>'Peticoes@index']);
  Route::post('/peticoes/salvar',['as'=>'peticoes.salvar','uses'=>'Peticoes@salvar']);
  Route::get('/peticoes/editar/{id}',['as'=>'peticoes.editar','uses'=>'Peticoes@editar']);
  Route::put('/peticoes/atualizar/{id}',['as'=>'peticoes.atualizar','uses'=>'Peticoes@atualizar']);
});

Route::get('/login',['as'=>'login','uses'=>'Login@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Login@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Login@entrar']);

//Route::get('/peticoes/novo',['as'=>'novaPeticao','uses'=>'Peticoes@novo']);
