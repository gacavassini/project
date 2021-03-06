@extends('layout.site')

@section('titulo','Página Inicial')

@section('conteudo')
  <div class="home">
	   	
   	<div class="conjunto">
		<a href="{{route('atividades.tela')}}">
		<img width="30%"  src="{{ url('images/files-01.png') }}" /></a>
		<h2 style="margin-bottom: 6%">Atividades <br></h2>
		<table  class="Thome" >
			<tbody>
			<tr><td> 
				<a href="{{route('atividades.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('atividades.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('atividades.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('atividades.tela')}}">
					<img style="margin-top:2%;" width="13%"  src="{{ url('images/ok-01.png') }}" >  <span>  Lembretes</span> 
				</a>
			</td></tr>
		</tbody>
		</table>

  	</div>


	<div class="conjunto">
		
		<img width="30%"  src="{{ url('images/doc2-01.png') }}" />
		<h2 style="margin-bottom: 6%">Petição <br></h2>
		<table class="Thome" >
			<tbody>
				<tr><td> 
					<a  href="{{ route('peticoes.novo') }}">
						<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
					</a>
				</td></tr>
				<tr><td>
					 <a  href="{{ route('peticoes.index') }}">
						<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
					</a>
				</td></tr>
				<tr><td> 
					<a href="{{ route('peticoes.index') }}">
						<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
					</a>
				</td></tr>
			</tbody>
		</table>

  	</div>



  	  	<div class="conjunto">
		
		<img width="25%" style="margin-bottom: 5%" src="{{ url('images/balanca-01.png') }}" />
		<h2 style="margin-bottom: 6%">Base <br></h2>
		<table  class="Thome" >
			<tbody>
			<tr><td> 
				<a href="{{route('bases.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('bases.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('bases.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
		</table>

  	</div>

  	<div class="conjunto">
		
		<img width="25%" style="margin-bottom: 5%" src="{{ url('images/balanca-01.png') }}" />
		<h2 style="margin-bottom: 6%">Pedidos <br></h2>
		<table  class="Thome" >
			<tbody>
			<tr><td> 
				<a href="{{route('pedidos.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('pedidos.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('pedidos.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
		</table>

  	</div>


  	  	<div style="margin-top: 5%; margin-bottom: -3%" class="conjunto">
		
			<img width="28%" style="margin-top: -3%" src="{{ url('images/doc-01.png') }}" />
			<h2 style="margin-bottom: 6%">Entrevista <br></h2>
			<table  class="Thome" >
				<tbody>
			<tr><td> 
				<a href="{{route('entrevistas.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('entrevistas.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('entrevistas.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
			</table>

  		</div>

	<div class="conjunto">
		
			<img width="30%" 	 src="{{ url('images/quest-01.png') }}" />
			<h2 style="margin-bottom: 6%">Questões <br></h2>
			<table  class="Thome" >
				<tbody>
			<tr><td> 
				<a href="{{route('questoes.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('questoes.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('questoes.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
			</table>

  		</div>

  			<div class="conjunto">
		
			<img width="30%" 	 src="{{ url('images/cliente-01.png') }}" />
			<h2 style="margin-bottom: 6%">Cliente <br></h2>
			<table  class="Thome" >
				<tbody>
			<tr><td> 
				<a href="{{route('clientes.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('clientes.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('clientes.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
			</table>

  		</div>


  			<div class="conjunto">
		
			<img width="30%" 	 src="{{ url('images/bag-01.png') }}" />
			<h2 style="margin-bottom: 6%">Empresa <br></h2>
			<table  class="Thome" >
<tbody>
			<tr><td> 
				<a href="{{route('empresas.novo')}}">
					<img width="14%" src="{{ url('images/file-01.png') }}" > <span>  Nova</span>
				</a>
			</td></tr>
			<tr><td>
				 <a href="{{route('empresas.listar')}}">
					<img width="14%"  src="{{ url('images/edit-01.png') }}" > <span>  Editar </span>
				</a>
			</td></tr>
			<tr><td> 
				<a href="{{route('empresas.listar')}}">
					<img style="margin-top:2%;" width="16%"  src="{{ url('images/see-01.png') }}" >  <span>  Consultar</span> 
				</a>
			</td></tr>
		</tbody>
			</table>

  		</div>



	
</div>



@endsection
