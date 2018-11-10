
@extends('layout.site')
@section('titulo','Editar Entrevista')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Editar Entrevista</h3>
    <form class="" action="{{route('entrevistas.atualizar', $registro->codEntrevista)}}" method="put">
        {{ csrf_field() }}
        @include('entrevistas._form')
    </form>
</div>
@endsection
