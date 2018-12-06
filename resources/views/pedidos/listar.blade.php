@extends('layout.site')
@section('titulo','Consultar Pedidos')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Pedidos</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome do Pedido"> <a class="btnSave" style="width: 27%" href="{{route('pedidos.novo')}}">Novo</a> 
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          		<th>ID</th>
    			<th>Nome</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($pedidos as $pedido)
    		<tr>
    			<td>{{$pedido->codPedido}}</td>
                <td>{{$pedido->nomePedido}}</td>
    			<td>
              <a href="{{ route('pedidos.editar',$pedido->codPedido)}}">
                  <img width="4%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('pedidos.visualizar', $pedido->codPedido) }}">
                  <img width="6%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="">
                  <img width="3%" src="{{ url('images/delet.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
