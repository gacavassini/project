
@extends('layout.site')
@section('titulo','Editar Questão')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Editar Questão</h3>


      <form class="" action="{{route('questoes.atualizar', $registro->codQuestao)}}" method="put">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
