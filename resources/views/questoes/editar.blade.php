
@extends('layout.site')
@section('titulo','Editar Questão')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Editar Questão</h3>
    <form class="" action="{{route('questoes.atualizar', $registro->codQuestao)}}" method="put">
        {{ csrf_field() }}
        @include('questoes._form')
    </form>
</div>
@endsection
