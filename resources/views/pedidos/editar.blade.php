
@extends('layout.site')
@section('titulo','Editar Pedido')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Editar Pedido</h3>


      <form class="" action="{{route('pedidos.atualizar', $registro->codPedido)}}" method="put">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
