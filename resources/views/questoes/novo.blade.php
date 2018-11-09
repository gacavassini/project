
@extends('layout.site')
@section('titulo','Cadastrar Questão')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Cadastrar Questão</h3>
    <form class="" action="{{route('questoes.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('questoes._form')
    </form>
</div>
@endsection
