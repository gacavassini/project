@extends('layout.site')
@section('titulo','Consultar Clientes')

@section('conteudo')

 <div class="conteudoForm">

      <h2 class="center" style="margin-bottom: 2%">Lista de Clientes</h2>
   <div id="busca"> 
      <a href="{{ route('clientes.novo') }}">
              <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
           </a>
      <div class="search">
        <form>
           <input  type="search" id="BuscaPet" placeholder="Nome do Cliente">
        </form>
      </div>
  </div><br>


    <table class="consulta">
    	<thead>
    		<tr>
          
    			<th>Nome</th>    			
    			<th>RG</th>
    			<th>Telefone</th>
    			<th>Celular</th>
    			<th>E-mail</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($clientes as $cliente)
    		<tr>
    			
                <td style="width: 29%" id="consultaFonteMenor">{{$cliente->nome}}</td>
    			<td id="consultaFonteMenor">{{$cliente->rg}}</td>
    			<td id="consultaFonteMenor">{{$cliente->telefoneRes}}</td>
    			<td id="consultaFonteMenor">{{$cliente->celular}}</td>
    			<td id="consultaFonteMenor">{{$cliente->email}}</td>
    			<td width="8%">
              <a href="{{ route('clientes.editar',$cliente->codCliente)}}">
                  <img width="33%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('clientes.visualizar', $cliente->codCliente) }}">
                  <img width="43%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
