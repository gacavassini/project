@extends('layout.site')
@section('titulo','Consultar Entrevistas')

@section('conteudo')

 <div class="conteudoForm">
    <h2 class="center" style="margin-bottom: 2%">Lista de Entrevistas</h2>
   <div id="busca"> 
      <a href="{{ route('entrevistas.novo') }}">
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
          
    			<th>Cliente</th>
    			<th>Empresa</th>
    			<th>Data da Entrevista</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($entrevistas as $entrevista)
    		<tr>
    			<td style="width:38%">{{$entrevista->cliente->nome}}</td>
    			<td>{{$entrevista->empresa->nome}}</td>
    			<td style="width:19%">{{$entrevista->created_at}}</td>
    			<td style="width:14%; padding-left: 1% ">
              <a href="{{ route('entrevistas.editar',$entrevista->codEntrevista)}}">
                  <img width="20%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('entrevistas.visualizar', $entrevista->codEntrevista) }}">
                  <img width="26%" src="{{ url('images/see-01.png') }}">
              </a>
               <a href="" target="_blank">
                   <img width="23%" src="{{ url('images/pdf.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
