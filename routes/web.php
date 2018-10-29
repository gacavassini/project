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
  Route::get('/peticoes',['as'=>'peticoes.index','uses'=>'Peticoes@index']);
  Route::post('/peticoes/salvar',['as'=>'peticoes.salvar','uses'=>'Peticoes@salvar']);
  Route::get('/peticoes/editar/{id}',['as'=>'peticoes.editar','uses'=>'Peticoes@editar']);
  Route::put('/peticoes/atualizar/{id}',['as'=>'peticoes.atualizar','uses'=>'Peticoes@atualizar']);

//Rota clientes
  Route::get('/clientes/novo',['as'=>'clientes.novo', 'uses'=>'Clientes@novo']);
  Route::post('/clientes/salvar', ['as'=> 'clientes.salvar', 'uses'=>'Clientes@salvar']);
  Route::get('/clientes/listar', ['as'=> 'clientes.listar', 'uses'=>'Clientes@listar']);
<<<<<<< HEAD
  Route::get('/clientes/editar/{id}',['as'=>'clientes.editar','uses'=>'Clientes@editar']);
  Route::put('/clientes/atualizar/{id}',['as'=>'clientes.atualizar','uses'=>'Clientes@atualizar']);

=======
  Route::get('/clientes/editar/{id}', ['as'=> 'clientes.editar', 'uses'=>'Clientes@editar']);
>>>>>>> d8cf7610b81a435c6820ce0d3abb4d3da5c15eec

//Rota empresas
  Route::get('/empresas/novo',['as'=>'empresas.novo', 'uses'=>'Empresas@novo']);
  Route::post('/empresas/salvar', ['as'=> 'empresas.salvar', 'uses'=>'Empresas@salvar']);
  Route::get('/empresas/listar', ['as'=> 'empresas.listar', 'uses'=>'Empresas@listar']);
  Route::get('/empresas/editar/{id}',['as'=>'empresas.editar','uses'=>'Empresas@editar']);
  Route::put('/empresas/atualizar/{id}',['as'=>'empresas.atualizar','uses'=>'Empresas@atualizar']);


});

Route::get('/login',['as'=>'login','uses'=>'Login@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Login@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Login@entrar']);

//Route::get('/peticoes/novo',['as'=>'novaPeticao','uses'=>'Peticoes@novo']);
