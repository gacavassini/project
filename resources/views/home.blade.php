@extends('layout.site')

@section('titulo',Route::currentRouteName())

@section('conteudo')
  <div class="container">
    <h3 class="center">{{Route::currentRouteName()}}</h3>
  </div>
@endsection
