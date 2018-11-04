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
  Route::get('/clientes', ['as'=> 'clientes.listar', 'uses'=>'Clientes@listar']);
  Route::get('/clientes/editar/{codCliente}',['as'=>'clientes.editar','uses'=>'Clientes@editar']);
  Route::put('/clientes/atualizar/{codCliente}',['as'=>'clientes.atualizar','uses'=>'Clientes@atualizar']);

  //Rota empresas
  Route::get('/empresas/novo',['as'=>'empresas.novo', 'uses'=>'Empresas@novo']);
  Route::post('/empresas/salvar', ['as'=> 'empresas.salvar', 'uses'=>'Empresas@salvar']);
  Route::get('/empresas', ['as'=> 'empresas.listar', 'uses'=>'Empresas@listar']);
  Route::get('/empresas/editar/{id}',['as'=>'empresas.editar','uses'=>'Empresas@editar']);
  Route::put('/empresas/atualizar/{id}',['as'=>'empresas.atualizar','uses'=>'Empresas@atualizar']);

  //rota atividades
  Route::get('/atividades', ['as'=>'atividades.listar', 'uses'=>'Atividades@listar']);
  Route::get('/atividades/tela', ['as'=>'atividades.tela', 'uses'=>'Atividades@tela']);
  Route::get('/atividades/novo', ['as'=>'atividades.novo', 'uses'=>'Atividades@novo']);
  Route::get('/atividades/visualizar/{id}', ['as'=>'atividades.visualizar', 'uses'=>'Atividades@visualizar']);
  Route::get('/atividades/editar/{id}', ['as'=>'atividades.editar', 'uses'=>'Atividades@editar']);
  Route::put('/atividades/atualizar/{id}', ['as'=>'atividades.atualizar', 'uses'=>'Atividades@atualizar']);
  Route::put('/atividades/salvar', ['as'=>'atividades.salvar', 'uses'=>'Atividades@salvar']);

  //rota Entrevistas
  Route::get('/entrevistas', ['as' => 'entrevistas.listar', 'uses' => 'Entrevistas@listar']);
  Route::get('/entrevistas/novo', ['as' => 'entrevistas.novo', 'uses' => 'Entrevistas@novo']);
  Route::get('/entrevistas/editar/{id}', ['as' => 'entrevistas.editar', 'uses' => 'Entrevistas@editar']);
  Route::post('/entrevistas/salvar', ['as' => 'entrevistas.salvar', 'uses' => 'Entrevistas@salvar']);
  Route::put('/entrevistas/atualizar/{id}', ['as' => 'entrevistas.atualizar', 'uses' => 'Entrevistas@atualizar']);

  //rota Questoes
  Route::get('/questoes', ['as' => 'questoes.listar', 'uses' => 'Questoes@listar']);
  Route::get('/questoes/novo', ['as' => 'questoes.novo', 'uses' => 'Questoes@novo']);
  Route::get('/questoes/editar/{id}', ['as' => 'questoes.editar', 'uses' => 'Questoes@editar']);
  Route::get('/questoes/atualizar/{id}', ['as' => 'questoes.atualizar', 'uses' => 'Questoes@atualizar']);
});

Route::get('/login',['as'=>'login','uses'=>'Login@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Login@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Login@entrar']);
