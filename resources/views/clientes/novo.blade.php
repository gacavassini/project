
@extends('layout.site')
@section('titulo','Cadastrar Cliente')

@section('conteudo')

<div class="conteudoForm">


    <h3 class="center">Cadastrar Cliente</h3>

      <form class="" action="{{route('clientes.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('clientes._form')
      </form>


</div> <!--Fechou conteudo-->

@endsection
