@extends('layout.site')

@section('conteudo')
	<form class="" action="{{route('peticoes.salvar')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div style="clear: both;"></div>

		<div class="conteudo">
			<div class="menuLateral">
				<div class="global-div">
					<ul class="abas">
						<li><a href="#Base">Base</a></li>
						<li><a href="#Pedidos">Pedidos</a></li>
					</ul>

					<div id="todo"></div>

					<div id="conteudoMenuL">
						<div id="Base">
							<br />
							<div class="select-box">
								<label for="baseSelect" class="label select-box1"><span class="label-desc">Selecionar Item</span> </label>
								<select id="baseSelect" class="select">
									<option value=""></option>
									@foreach($bases as $base)
										<option value="{{$base->rotulo}}">{{$base->rotulo}}</option>
									@endforeach
								</select>
							</div><!--Fechou select box -->
							<!-- se selecionar o endereçamento -->
							<div class="select-box">
								<label for="enderecamentoSelect" class="label select-box1"><span class="label-desc">Selecionar Endereçamento</span> </label>
								<select id="enderecamentoSelect" class="select">
									<option value="Choice 1">Endereçamento 1</option>
									<option value="Choice 2">Endereçamento 2</option>
									<option value="Choice 2">Endereçamento 3</option>
								</select>
							</div><!--Fechou select box -->
							<button  id="savePed" type="button" name="insereBase">Inserir</button>
						</div><!--Fechou Base -->

						<div id="Pedidos"> <br />
							<h2>Selecione os Pedidos</h2>
							<div class="checkBoxContainer">
								<div class="checkbox">
									@foreach($pedidos as $pedido)
										<INPUT TYPE="checkbox" NAME="OPCAO" VALUE="{{$pedido->codPedido}}"> {{$pedido->nomePedido}} <br /><br />
									@endforeach
								</div><!--Fechou check -->
							</div><!--Fechou checkBoxContainer -->
							<button  id="savePed" type="button" name="inserePedido">Inserir</button>
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
				<div class="select-box">
					<label for="clienteSelect"><span>Selecionar Cliente</span></label>
					<select id="clienteSelect">
						<option value=""></option>
						@foreach($clientes as $cliente)
							<option value="{{$cliente->codCliente}}">{{$cliente->nome}}</option>
						@endforeach
					</select>
				</div><!--Fechou select box do cliente -->
				<div id="entrevistas" style="display:none;">
					<label for="entrevistaSelect"><span>Selecionar Entrevista</span> </label>
					<select id="entrevistaSelect">

					</select>
				</div><!--Fechou select box -->
				<br />
				<textarea class="ckeditor" name="editor1" cols="80" rows="30" style="height: 90%"></textarea>
				<!-- (3): Javascript code to replace textarea with id='editor1' by CKEditor -->
				<button class="myButton" name="btnSaveP">Salvar</button>
				<button class="myButton" id="cancel" name="btnCancelP">Cancelar</button>
			</div><!--Fechou peticao -->
		</div><!--Fechou conteudo -->

		<div style="clear: both;"></div>
	</form>

@endsection

@section('javascript')
	<script src="{{ url('/js/abas.js') }}"></script>
	<script src="{{ url('/js/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">
		//isso roda quando cliente eh alterado
		$('#clienteSelect').change(function(){
			if($('#clienteSelect').val() == ""){
				$('#entrevistaSelect').empty();
				$('#entrevistas').hide();
			}else{
				$.getJSON('/api/entrevistas/' + $('#clienteSelect').val(), function(data){
					$('#entrevistaSelect').empty();
					$('#entrevistaSelect').append('<option value=""></option>');
					for(var i = 0; i < data.length; i++){
						opcao = '<option value="' + data[i].codEntrevista + '">' +
							data[i].created_at + '</option>';
						$('#entrevistaSelect').append(opcao);
					}
				});
				$('#entrevistas').show();
			}
		});

		//isso roda quando base eh alterada
		$('#baseSelect').change(function(){
			if($('#baseSelect').val() == ""){
				$('#enderecamentoSelect').hide();
			}
		});
	</script>
@endsection
