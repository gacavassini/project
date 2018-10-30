
@extends('layout.site')
@section('titulo','Tela de Lembretes')

@section('conteudo')

<div class="telaLembretes">

	<div class="listaAtividades" id="hoje">
		<h2> HOJE</h2>
		<table class="consultarAtividade">
			<thead>
    		<tr>
    			<th>Atividade</th>
    			<th>nome cli</th>
    			<th>processo</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		
    		<tr>
    			<td>fazer cha</td>
    			<td>cleonice</td>
    			<td>09329083</td>
    			<td> <a href=""><img width="13%" src="{{ url('images/edit-01.png') }}"> </a> <a href=""><img width="18%" src="{{ url('images/see-01.png') }}"> </a></td>
    		</tr>
    	
    	</tbody>
		</table>
		
	</div>

	<div class="listaAtividades" id="amanha">
		<h2> AMANHA</h2>
	</div>

	<div class="listaAtividades" id="depoisAmanha">
		<h2> DEPOIS DE AMANHA</h2>
	</div>
	
</div>

@endsection