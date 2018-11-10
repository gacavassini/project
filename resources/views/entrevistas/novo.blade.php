@extends('layout.site')
@section('titulo','Cadastrar Entrevista')
@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Cadastrar Entrevista</h3>
    <form class="" action="{{route('entrevistas.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('entrevistas._form')
    </form>
</div>
@endsection
