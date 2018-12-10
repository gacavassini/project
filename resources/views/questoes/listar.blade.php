@extends('layout.site')
@section('titulo','Consultar Questões')

@section('conteudo')

 <div class="conteudoForm">
    <h2 class="center" style="margin-bottom: 2%">Lista de Questões</h2>
   <div id="busca"> 
      <a href="{{ route('questoes.novo') }}">
              <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
           </a>
      <div class="search">
        <form>
           <input  type="search" id="BuscaPet" placeholder="Questão">
        </form>
      </div>
  </div><br>



    <table class="consulta" style="width: 85%">
    	<thead>
    		<tr>
          <th>Descrição</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($questoes as $questao)
    		<tr>
    		  <td>{{$questao->descQuestao}}</td>
    			<td style="width: 16%">
              <a href="{{ route('questoes.editar',$questao->codQuestao)}}">
                  <img width="23%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('questoes.visualizar', $questao->codQuestao) }}">
                  <img width="27%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="">
                  <img  width="16%" src="{{ url('images/delet.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
