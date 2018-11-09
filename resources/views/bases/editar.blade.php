
@extends('layout.site')
@section('titulo','Editar Base')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Editar Base</h3>


      <form class="" action="{{route('bases.atualizar', $registro->codBase)}}" method="put">
        {{ csrf_field() }}

        @include('bases._form')

      </form>

  </div>

@endsection
