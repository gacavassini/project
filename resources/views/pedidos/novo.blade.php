
@extends('layout.site')
@section('titulo','Cadastrar Pedido')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Cadastrar Pedido</h3>
    <form class="" action="{{route('pedidos.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('pedidos._form')
    </form>
</div>

@endsection
