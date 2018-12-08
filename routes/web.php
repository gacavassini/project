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
  Route::get('/peticoes',['as'=>'peticoes.index','uses'=>'Peticoes@index']);
  Route::post('/peticoes/salvar',['as'=>'peticoes.salvar','uses'=>'Peticoes@salvar']);
  Route::get('/peticoes/editar/{id}',['as'=>'peticoes.editar','uses'=>'Peticoes@editar']);
  Route::put('/peticoes/atualizar/{id}',['as'=>'peticoes.atualizar','uses'=>'Peticoes@atualizar']);
  Route::get('/peticoes/visualizarDocumento/{id}', ['as'=>'peticoes.visualizarDocumento', 'uses' => 'Peticoes@visualizarDocumento']);

  //Rota clientes
  Route::get('/clientes/novo',['as'=>'clientes.novo', 'uses'=>'Clientes@novo']);
  Route::post('/clientes/salvar', ['as'=> 'clientes.salvar', 'uses'=>'Clientes@salvar']);
  Route::get('/clientes', ['as'=> 'clientes.listar', 'uses'=>'Clientes@listar']);
  Route::get('/clientes/editar/{codCliente}',['as'=>'clientes.editar','uses'=>'Clientes@editar']);
  Route::get('/clientes/visualizar/{codCliente}',['as'=>'clientes.visualizar','uses'=>'Clientes@visualizar']);
  Route::put('/clientes/atualizar/{codCliente}',['as'=>'clientes.atualizar','uses'=>'Clientes@atualizar']);

  //Rota empresas
  Route::get('/empresas/novo',['as'=>'empresas.novo', 'uses'=>'Empresas@novo']);
  Route::post('/empresas/salvar', ['as'=> 'empresas.salvar', 'uses'=>'Empresas@salvar']);
  Route::get('/empresas', ['as'=> 'empresas.listar', 'uses'=>'Empresas@listar']);
  Route::get('/empresas/editar/{id}',['as'=>'empresas.editar','uses'=>'Empresas@editar']);
  Route::get('/empresas/visualizar/{id}',['as'=>'empresas.visualizar','uses'=>'Empresas@visualizar']);
  Route::put('/empresas/atualizar/{id}',['as'=>'empresas.atualizar','uses'=>'Empresas@atualizar']);

  //rota atividades
  Route::get('/atividades', ['as'=>'atividades.listar', 'uses'=>'Atividades@listar']);
  Route::get('/atividades/lembretes', ['as'=>'atividades.tela', 'uses'=>'Atividades@tela']);
  Route::get('/atividades/novo', ['as'=>'atividades.novo', 'uses'=>'Atividades@novo']);
  Route::get('/atividades/visualizar/{id}', ['as'=>'atividades.visualizar', 'uses'=>'Atividades@visualizar']);
  Route::get('/atividades/editar/{id}', ['as'=>'atividades.editar', 'uses'=>'Atividades@editar']);
  Route::get('/atividades/atualizar/{id}', ['as'=>'atividades.atualizar', 'uses'=>'Atividades@atualizar']);
  Route::post('/atividades/salvar', ['as'=>'atividades.salvar', 'uses'=>'Atividades@salvar']);

  //rota Entrevistas
  Route::get('/entrevistas', ['as' => 'entrevistas.listar', 'uses' => 'Entrevistas@listar']);
  Route::get('/entrevistas/novo', ['as' => 'entrevistas.novo', 'uses' => 'Entrevistas@novo']);
  Route::get('/entrevistas/editar/{id}', ['as' => 'entrevistas.editar', 'uses' => 'Entrevistas@editar']);
  Route::get('/entrevistas/visualizar/{id}', ['as' => 'entrevistas.visualizar', 'uses' => 'Entrevistas@visualizar']);
  Route::post('/entrevistas/salvar', ['as' => 'entrevistas.salvar', 'uses' => 'Entrevistas@salvar']);
  Route::put('/entrevistas/atualizar/{id}', ['as' => 'entrevistas.atualizar', 'uses' => 'Entrevistas@atualizar']);

  //rota Questoes
  Route::get('/questoes', ['as' => 'questoes.listar', 'uses' => 'Questoes@listar']);
  Route::get('/questoes/novo', ['as' => 'questoes.novo', 'uses' => 'Questoes@novo']);
  Route::get('/questoes/editar/{id}', ['as' => 'questoes.editar', 'uses' => 'Questoes@editar']);
  Route::get('/questoes/visualizar/{id}', ['as' => 'questoes.visualizar', 'uses' => 'Questoes@visualizar']);
  Route::get('/questoes/atualizar/{id}', ['as' => 'questoes.atualizar', 'uses' => 'Questoes@atualizar']);
  Route::post('/questoes/salvar', ['as' => 'questoes.salvar', 'uses' => 'Questoes@salvar']);

  //rota Bases
  Route::get('/bases', ['as' => 'bases.listar', 'uses' => 'Bases@listar']);
  Route::get('/bases/novo', ['as' => 'bases.novo', 'uses' => 'Bases@novo']);
  Route::post('/bases/salvar', ['as' => 'bases.salvar', 'uses' => 'Bases@salvar']);
  Route::get('/bases/editar/{id}', ['as' => 'bases.editar', 'uses' => 'Bases@editar']);
  Route::get('/bases/visualizar/{id}', ['as' => 'bases.visualizar', 'uses' => 'Bases@visualizar']);
  Route::get('/bases/atualizar/{id}', ['as' => 'bases.atualizar', 'uses' => 'Bases@atualizar']);

  //rota Pedidos
  Route::get('/pedidos', ['as' => 'pedidos.listar', 'uses' => 'Pedidos@listar']);
  Route::get('/pedidos/novo', ['as' => 'pedidos.novo', 'uses' => 'Pedidos@novo']);
  Route::post('/pedidos/salvar', ['as' => 'pedidos.salvar', 'uses' => 'Pedidos@salvar']);
  Route::get('/pedidos/editar/{id}', ['as' => 'pedidos.editar', 'uses' => 'Pedidos@editar']);
  Route::get('/pedidos/visualizar/{id}', ['as' => 'pedidos.visualizar', 'uses' => 'Pedidos@visualizar']);
  Route::get('/pedidos/atualizar/{id}', ['as' => 'pedidos.atualizar', 'uses' => 'Pedidos@atualizar']);
});

Route::get('/login',['as'=>'login','uses'=>'Login@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Login@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Login@entrar']);
