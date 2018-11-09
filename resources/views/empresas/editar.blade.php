
@extends('layout.site')
@section('titulo','Editar Empresa')

@section('conteudo')

    <div class="conteudoForm">
        <h3 class="center">Editar Empresa</h3>
        <form class="" action="{{route('empresas.atualizar', '$empresa->codEmpresa')}}" method="post">
            {{ csrf_field() }}
            @include('empresas._form')
        </form>
    </div>

@endsection
