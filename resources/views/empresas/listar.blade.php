
@extends('layout.site')
@section('titulo','Consultar Empresas')

@section('conteudo')
{{ csrf_field() }}



 <div class="conteudoForm">
    <h3 class="center">Consultar Empresas</h3>
    <div class="row">
        <form class="" action="" method="post">
            <form action=" " method="post">
                <input type="search" id="busca" name="q">
                <button type="submit"> Pesquisar </button>
            </form>
        </form>
    </div>
  </div>

 
@endsection
