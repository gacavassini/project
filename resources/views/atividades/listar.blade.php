@extends('layout.site')
@section('titulo','Consultar Atividades')

@section('conteudo')

 <div class="conteudoForm">

     <h2 class="center" style="margin-bottom: 2%">Lista de Atividades</h2>
   <div id="busca"> 
      <a href="{{ route('atividades.novo') }}">
              <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
           </a>
      <div class="search">
        <form>
           <input  type="search" id="BuscaPet" placeholder="Nome do Cliente">
        </form>
      </div>
  </div><br>


    <table class="consulta" width="90%" >
    	<thead>
    		<tr>
          	<th>ID</th>
    			<th>Atividade</th>
    			<th>Status</th>
    			<th >Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($atividades as $atividade)
    		<tr>
    			<td>{{$atividade->codAtividade}}</td>
    			<td width="65%">{{$atividade->atividade}}</td>
                <td>
                    {{($atividade->status == 1) ? "Pendente" : "Concluído"}}
                </td>
    			<td  style="width: 10%;">
              <a href="{{ route('atividades.editar',$atividade->codAtividade)}}">
                  <img width="24%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="javascript:void(0)">
                  <img width="30%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
