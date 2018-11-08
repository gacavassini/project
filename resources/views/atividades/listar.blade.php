@extends('layout.site')
@section('titulo','Consultar Atividades')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Atividades</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome da Atividade">
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          		<th>ID</th>
    			<th>Atividade</th>
    			<th>Status</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($atividades as $atividade)
    		<tr>
    			<td>{{$atividade->codAtividade}}</td>
    			<td>{{$atividade->atividade}}</td>
                <td>{{$atividade->status}}</td>
    			<td>
              <a href="{{ route('atividades.editar',$atividade->codAtividade)}}">
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
