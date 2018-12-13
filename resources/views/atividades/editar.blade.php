@extends('layout.site')
@section('titulo','Nova Atividade')

@section('conteudo')
<div class="conteudoForm">
  <h2  class="center">Editar Atividade</h2>
    <form class="" action="{{route('atividades.atualizar', $registro->codAtividade)}}" method="put">
      {{ csrf_field() }}

      @include('atividades._form')
    </form>
</div>
@endsection

@section('javascript')
  <script>
    $("#datepicker").datepicker();
  </script>
@endsection
