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
								<label for="select-box1" class="label select-box1"><span class="label-desc">Selecionar Item</span> </label>
								<select id="select-box1" class="select">
									@foreach($empresas as $empresa)
										<option value="{{$empresa->nome}}">{{$empresa->nome}}</option>
									@endforeach
								</select>
							</div><!--Fechou select box -->
							<!-- se selecionar o endereçamento -->
							<div class="select-box">
								<label for="select-box1" class="label select-box1"><span class="label-desc">Selecionar Endereçamento</span> </label>
								<select id="select-box1" class="select">
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
									<INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op1"> opção1 <br />

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
				<input name="cliente" id="cliente" /><!--Fechou input do cliente -->
				<div class="select-box">
					<label for="select-box1" class="label select-box2"><span class="label-desc">Selecionar Entrevista</span> </label>
					<select id="select-box1" class="select">
						@foreach($entrevistas as $entrevista)
							<option value="{{$entrevista->codEntrevista}}">{{$entrevista->descResposta}}</option>
						@endforeach
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
