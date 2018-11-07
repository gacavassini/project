
@extends('layout.site')
@section('titulo','Cadastrar Entrevista')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Cadastrar Entrevista</h3>


      <form class="" action="{{route('entrevistas.salvar')}}" method="post">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
