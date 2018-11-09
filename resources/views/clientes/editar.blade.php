
@extends('layout.site')
@section('titulo','Editar Cliente')

@section('conteudo')

<div class="conteudoForm">


    <h3 class="center">Editar Cliente</h3>

    <form class="" action="{{route('clientes.atualizar', $cliente->codCliente)}}" method="put">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('clientes._form')
    </form>


</div> <!--Fechou conteudo-->

@endsection
