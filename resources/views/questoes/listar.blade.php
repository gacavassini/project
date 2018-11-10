@extends('layout.site')
@section('titulo','Consultar Questões')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Questões</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome da Questão">
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          		<th>ID</th>
    			<th>Descrição</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($questoes as $questao)
    		<tr>
    			<td>{{$questao->codQuestao}}</td>
                <td>{{$questao->descQuestao}}</td>
    			<td>
              <a href="{{ route('questoes.editar',$questao->codQuestao)}}">
                  <img width="13%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('questoes.visualizar', $questao->codQuestao) }}">
                  <img width="18%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
