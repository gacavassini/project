@extends('layout.site')
@section('titulo','Nova Atividade')

@section('conteudo')
<div class="conteudoForm">
  <h3 class="center">Cadastrar Atividade</h3>
    <form class="" action="{{route('atividades.salvar')}}" method="post">
      {{ csrf_field() }}

      @include('atividades._form')
    </form>
</div>
@endsection

@section('javascript')
  <script>
    $("#datepicker").datepicker();
  </script>
  <style>
    .pequeno{
      width: 50%;
      height: 4vh;
      margin: 0.5% 0%;
      display: inline-block;
    }
  </style>
@endsection
