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
  Route::get('/',['as'=>'home','uses'=>'Home@index']);
});

Route::get('/login',['as'=>'login','uses'=>'Login@index']);
Route::get('/login/sair',['as'=>'login.sair','uses'=>'Login@sair']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'Login@entrar']);
