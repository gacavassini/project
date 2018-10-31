@extends('layout.site')

@section('titulo','Página Inicial')

@section('conteudo')
  <div class="container">
    <h3 class="center">{{Route::currentRouteName()}}</h3>
  </div>
@endsection
