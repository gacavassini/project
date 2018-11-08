
@extends('layout.site')
@section('titulo','Editar Entrevista')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Editar Entrevista</h3>


      <form class="" action="{{route('entrevistas.atualizar', $registro->codEntrevista)}}" method="put">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
