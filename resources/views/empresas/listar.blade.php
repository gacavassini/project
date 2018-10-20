@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')
{{ csrf_field() }}
 <div class="conteudoForm">
    <h3 class="center">Lista de Empresas</h3>
    <div class="row">
      <form class="" action="" method="post">
        {{ csrf_field() }}



      
      </form>
    </div>
  </div>




 
@endsection
