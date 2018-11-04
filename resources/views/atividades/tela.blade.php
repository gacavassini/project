
@extends('layout.site')
@section('titulo','Tela de Lembretes')

@section('conteudo')
<style>
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
</style>
<div class="telaLembretes">

	<div class="listaAtividades" id="hoje">
		<h2> HOJE</h2> <br>
		<table class="consultarAtividade">
			<thead>
    		<tr>
    			<th id="maior">Atividade</th>
    			<th id="maior">Cliente</th>
    			<th id="peq">Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		
    		<tr>
    			<td>fazer cha para acalmar o juiz</td>
    			<td>cleonice bertioga james</td>
    			<td> <a href=""><img width="13%" src="{{ url('images/edit-01.png') }}"> </a>
    				<input id="checkAtiv" type="checkbox" value="">
    			<br> 
				<p>
					<button id="dialog-link" class="ui-button ui-corner-all ui-widget">
						<span class="ui-icon ui-icon-newwin"></span>Ver tudo
					</button>
					<!-- ui-dialog -->
					<div id="dialog" title="Dialog Title">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</p> </td>

    		</tr>


    		<tr>
    			<td>ligar testemunhas</td>
    			<td>paola bracho</td>
    			<td> <a href=""><img width="13%" src="{{ url('images/edit-01.png') }}"> </a>
    				<input id="checkAtiv" type="checkbox" value="">
    			<br> 
				<p>
					<button id="dialog-link2" class="ui-button ui-corner-all ui-widget">
						<span class="ui-icon ui-icon-newwin"></span>Ver tudo
					</button>
					<!-- ui-dialog -->
					<div id="dialog2" title="Dialog Title">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</p> </td>

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

@section('javascript')
<script>
	$( "#dialog" ).dialog({
		autoOpen: false,
		width: 400,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			},
		]
	});

	// Link to open the dialog
	$( "#dialog-link" ).click(function( event ) {
		$( "#dialog" ).dialog( "open" );
		event.preventDefault();
	});


	$( "#dialog2" ).dialog({
		autoOpen: false,
		width: 400,
		buttons: [
			{
				text: "Ok",
				click: function() {
					$( this ).dialog( "close" );
				}
			},
		]
	});

	// Link to open the dialog
	$( "#dialog-link2" ).click(function( event ) {
		$( "#dialog2" ).dialog( "open" );
		event.preventDefault();
	});
</script>
@endsection