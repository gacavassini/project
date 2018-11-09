
@extends('layout.site')
@section('titulo','Cadastrar Empresa')

@section('conteudo')

    <div class="conteudoForm">
        <h3 class="center">Cadastrar Empresa</h3>
        <form class="" action="{{route('empresas.salvar')}}" method="post">
            {{ csrf_field() }}
            @include('empresas._form')
        </form>

    </div>

@endsection
