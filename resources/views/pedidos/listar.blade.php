@extends('layout.site')
@section('titulo','Consultar Pedidos')

@section('conteudo')

 <div class="conteudoForm">
    <h2 class="center" style="margin-bottom: 2%">Lista de Pedidos</h2>
     <div id="busca"> 
    <a href="{{ route('pedidos.novo') }}">
            <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
         </a>
    <div class="search">
      <form>
         <input  type="search" id="BuscaPet" placeholder="Nome do Pedido">
      </form>
    </div>
  </div><br>


    <table class="consulta" style="width: 68%;margin-top: 2%">
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
    			<td style="width: 18%">
              <a href="{{ route('pedidos.editar',$pedido->codPedido)}}">
                  <img width="22%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('pedidos.visualizar', $pedido->codPedido) }}">
                  <img width="27%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="">
                  <img width="16%" src="{{ url('images/delet.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
