
@extends('layout.site')
@section('titulo','Cadastrar Base')

@section('conteudo')

    <div class="conteudoForm">
        <h3 class="center">Cadastrar Base</h3>


        <form class="" action="{{route('bases.salvar')}}" method="post">
            {{ csrf_field() }}
            @include('bases._form')
        </form>

    </div>

@endsection
