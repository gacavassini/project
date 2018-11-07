
@extends('layout.site')
@section('titulo','Editar Base')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Editar Base</h3>


      <form class="" action="{{route('bases.atualizar', $registro->codBase)}}" method="put">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
