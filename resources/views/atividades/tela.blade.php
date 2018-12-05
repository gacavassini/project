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

	#fisico{
		color:blue;
	}

	#eletronico{
		color:green;
	}

	#atrasado{
		color:red;
	}
</style>
<div id="legenda" style="padding:5px;">
	<h3>Legenda:</h3>
	<strong style="color:red">Atrasado</strong><br />
	<strong style="color:green">Eletrônico</strong><br />
	<strong style="color:blue">Físico</strong><br />
</div>

<div class="telaLembretes">

	<div class="listaAtividades" id="hoje">
		<h2 id="today">{{ $hoje->format('d/m/Y') }} </h2> <br>
		@include('atividades._today')

	</div>

	<div class="listaAtividades" id="amanha">
		<h2 id="tomorrow">{{ $amanha->format('d/m/Y') }} </h2><br>
		@include('atividades._tomorrow')
	</div>

	<div class="listaAtividades" id="depoisAmanha">
		<h2 id="afterTomorrow">{{ $depois->format('d/m/Y') }} </h2><br>
		@include('atividades._afterTomorrow')
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
<script src="{{ url('/js/atividades.js') }}"></script>
<script type="text/javascript">
	mudaOsLabelsEmLembrete();

	var atividades = $(".checkAtiv");
	for(var i = 0, len = atividades.length; i<len; i++){
		atividades[i].onclick = clickCB;
	}

	$(".checkAtiv").on("click", "input[type=checkbox]", clickCB);
</script>
@endsection
