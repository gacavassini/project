
@extends('layout.site')
@section('titulo','Editar Pedido')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Editar Pedido</h3>
    <form class="" action="{{route('pedidos.atualizar', $registro->codPedido)}}" method="put">
        {{ csrf_field() }}
        @include('pedidos._form')
    </form>
</div>
@endsection
