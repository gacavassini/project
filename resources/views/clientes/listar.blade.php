@extends('layout.site')
@section('titulo','Consultar Clientes')

@section('conteudo')

 <div class="conteudoForm">


    <h3 class="center">Lista de Clientes</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome do Cliente">
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          <th>ID</th>
    			<th>Nome</th>
    			<th>CPF</th>
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
    			<td>{{$cliente->codCliente}}</td>
                <td>{{$cliente->nome}}</td>
    			<td>{{$cliente->cpf}}</td>
    			<td>{{$cliente->rg}}</td>
    			<td>{{$cliente->telefoneRes}}</td>
    			<td>{{$cliente->celular}}</td>
    			<td>{{$cliente->email}}</td>
    			<td>
              <a href="{{ route('clientes.editar',$cliente->codCliente)}}">
                  <img width="13%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="javascript:void(0)">
                  <img width="18%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
