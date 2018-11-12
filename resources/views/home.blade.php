@extends('layout.site')

@section('titulo','Página Inicial')

@section('conteudo')
  <div class="home">
	   	
  
	<div class="conjunto">
		
		<img width="30%"  src="{{ url('images/doc2-01.png') }}" />
		<h2>Petição <br></h2>
		<table class="Thome" >
			<tbody>
			<tr><td> <img width="14%"  src="{{ url('images/file-01.png') }}" >Nova </td></tr>
			<tr><td> <img width="14%"  src="{{ url('images/edit-01.png') }}" >Editar </td></tr>
			<tr><td> <img width="16%"  src="{{ url('images/see-01.png') }}" >Consultar </td></tr>
		</tbody>
		</table>

  	</div>



	
</div>



@endsection
