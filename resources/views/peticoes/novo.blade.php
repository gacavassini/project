@extends('layout.site')

@section('conteudo')
	<form class="" action="{{route('peticoes.salvar')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div style="clear: both;"></div>

		<div class="conteudo">
			<div class="menuLateral">
				<div class="global-div">
					<ul class="abas">
						<li><a href="javascript:void(0)">Base</a></li>
						<li><a href="javascript:void(0)">Pedidos</a></li>
					</ul>

					<div id="todo"></div>

					<div id="conteudoMenuL">
						<div id="Base">
							<br />
							<div class="select-box">
								<label for="baseSelect"><span>Selecionar Item</span><br> </label>
								<select id="baseSelect">
									<option value=""></option>
									@foreach($bases as $base)
										<option value="{{$base->codRot}}">{{$base->rotulo}}</option>
									@endforeach
								</select>
							</div><!--Fechou select box de bases -->

							<!-- se selecionar o endereçamento -->
							<div class="select-box" id="enderecamento" style="display:none">
								<label for="enderecamentoSelect"><span>Selecionar Endereçamento</span><br> </label>
								<select id="enderecamentoSelect">
								</select>
							</div><!--Fechou select box -->
							<button  id="savePed" type="button" name="insereBase" class="insereBase">Inserir</button>
						</div><!--Fechou Base -->

						<div id="Pedidos"> <br />
							<h2>Selecione os Pedidos</h2>
							<div class="checkBoxContainer">
								<div class="checkbox">
									@foreach($pedidos as $pedido)
										<input type="checkbox" value="{{$pedido->codPedido}}"> {{$pedido->nomePedido}}
										<br /><br />
									@endforeach
								</div><!--Fechou check -->
							</div><!--Fechou checkBoxContainer -->
							<button  id="savePed" type="button" name="inserePedido" class="inserePedido">Inserir</button>
						</div><!--Fechou pedidos -->

					</div><!--Fechou conteudoMenuL -->
				</div><!--Fechou global-div -->
			</div><!--Fechou menuLateral -->

			<div class="peticao">
				<h2>
					Montar Petição
				</h2>
				<br />

				<!-- (2): textarea will replace by CKEditor -->
				<!-- por enqnto um select para clientes -->
				<div id="CliEnt">
					<div class="select-box">
						<label for="clienteSelect"><span>Selecionar Cliente</span><br></label>
						<select id="clienteSelect" style="width: 40%" >
							<option value=""></option>
							@foreach($clientes as $cliente)
								<option value="{{$cliente->codCliente}}">{{$cliente->nome}}</option>
							@endforeach
						</select>
					</div><!--Fechou select box do cliente -->
					<div id="entrevistas" style="display:none;">
						<label for="entrevistaSelect"><span>Selecionar Entrevista</span> <br></label>
						<select id="entrevistaSelect"></select>
					</div><!--Fechou select box -->
					<br />
				</div> <!--Fechou select cliEnt -->
				<div class="editor">

					<textarea class="ckeditor" name="editor1" cols="80" rows="30" style="height: 90%"></textarea>
					<!-- (3): Javascript code to replace textarea with id='editor1' by CKEditor -->
					<button class="myButton" name="btnSaveP">Salvar</button>
					<button class="myButton" id="cancel" name="btnCancelP">Cancelar</button>
				</div>
			</div><!--Fechou peticao -->
		</div><!--Fechou conteudo -->

		<div style="clear: both;"></div>
	</form>

@endsection

@section('javascript')
	<script src="{{ url('/js/peticoes.js') }}"></script>
	<script src="{{ url('/js/abas.js') }}"></script>
	<script src="{{ url('/js/ckeditor/ckeditor.js') }}"></script>

	<script> CKEDITOR.replace( 'editor1' ); </script>
	<script>
		CKEDITOR.config.resize_enabled = true;
		CKEDITOR.config.width = '100%';
		CKEDITOR.config.resize_enabled = false;
		CKEDITOR.config.height = '50vh';
	</script>
	<script type="text/javascript">
		/*$("select").on("click" , function() {
			$(this).parent(".select-box").toggleClass("open");
		});

		$(document).mouseup(function (e)
		{
			var container = $(".select-box");

			if (container.has(e.target).length === 0)
			{
				container.removeClass("open");
			}
		});

		$("select").on("change" , function() {
			var selection = $(this).find("option:selected").text(),
			labelFor = $(this).attr("id"),
			label = $("[for='" + labelFor + "']");

			label.find(".label-desc").html(selection);

		});*/
	</script>
@endsection
