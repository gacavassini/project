@extends('layout.site')
@section('titulo','Consultar Bases')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Bases</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome da Base">
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          		<th>ID</th>
    			<th>Rótulo</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($bases as $base)
    		<tr>
    			<td>{{$base->codBase}}</td>
                <td>{{$base->rotulo}}</td>
    			<td>
              <a href="{{ route('bases.editar',$base->codBase)}}">
                  <img width="13%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('bases.visualizar', $base->codBase) }}">
                  <img width="18%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
