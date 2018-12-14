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

		<h2  id="today">{{ $hoje->format('d/m/Y') }} </h2>
				<span class="ui-icon ui-icon-info" id="infoToday"></span>
			<br>

			<div class="information" id="infoTo">
				<span style="color: black">Legenda:</span><br>
				<ul>
					<li style="color: red; margin-top:3% ">Atrasado</li>
					<li style="color: black; margin-top:3%">E = Eletrônico</li>
					<li style="color: #0b3e93; margin-top:3%">F = Físico </li>
				</ul>

			</div>
		@include('atividades._today')


	</div>

	<div class="listaAtividades" id="amanha">
		<h2 id="tomorrow">{{ $amanha->format('d/m/Y') }} </h2>
		<span class="ui-icon ui-icon-info" id="infoTomorrow"></span>
			<br>

			<div class="information" id="infoTom">
				<span style="color: black">Legenda:</span><br>
				<ul>
					<li style="color: red; margin-top:3% ">Atrasado</li>
					<li style="color: black; margin-top:3%">Eletrônico</li>
					<li style="color: #0b3e93; margin-top:3%">Físico </li>
				</ul>

			</div>
		@include('atividades._tomorrow')
	</div>

	<div class="listaAtividades" id="depoisAmanha">
		<h2 id="afterTomorrow">{{ $depois->format('d/m/Y') }} </h2>
		<span class="ui-icon ui-icon-info" id="infoAfterTomorrow"></span>
			<br>

			<div class="information" id="infoAt">
				<span style="color: black">Legenda:</span><br>
				<ul>
					<li style="color: red; margin-top:3% ">Atrasado</li>
					<li style="color: black; margin-top:3%">Eletrônico</li>
					<li style="color: #0b3e93; margin-top:3%">Físico </li>
				</ul>

			</div>
		@include('atividades._afterTomorrow')
	</div>

</div>
@endsection

@section('javascript')
<script src="{{ url('/js/atividades.js') }}"></script>
<!-- <script src="{{ url('/js/detalhes-lembretes.js') }}"></script> -->
<script type="text/javascript">
	mudaOsLabelsEmLembrete();

	var atividades = $(".checkAtiv");
	for(var i = 0, len = atividades.length; i<len; i++){
		atividades[i].onclick = clickCB;
	}

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

	$( "#dialog-link" ).click(function( event ) {
		$( "#dialog" ).dialog( "open" );
		event.preventDefault();
	});
</script>

@endsection
