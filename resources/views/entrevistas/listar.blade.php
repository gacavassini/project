@extends('layout.site')
@section('titulo','Consultar Entrevistas')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Entrevistas</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Entrevista">
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
                <th>ID</th>
    			<th>Cliente</th>
    			<th>Empresa</th>
    			<th>Data da Entrevista</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($entrevistas as $entrevista)
    		<tr>
    			<td>{{$entrevista->codEntrevista}}</td>
                <td>{{$entrevista->cliente->nome}}</td>
    			<td>{{$entrevista->empresa->nome}}</td>
    			<td>{{$entrevista->created_at}}</td>
    			<td>
              <a href="{{ route('entrevistas.editar',$entrevista->codEntrevista)}}">
                  <img width="13%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('entrevistas.visualizar', $entrevista->codEntrevista) }}">
                  <img width="18%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
