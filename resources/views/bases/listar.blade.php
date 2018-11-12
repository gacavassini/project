@extends('layout.site')
@section('titulo','Consultar Bases')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Bases</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome da Base"> <a class="btnSave" style="width: 27%" href="{{route('bases.novo')}}">Nova</a> 
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
                  <img width="4%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('bases.visualizar', $base->codBase) }}">
                  <img width="6%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="">
                  <img width="3%" src="{{ url('images/delet.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection
