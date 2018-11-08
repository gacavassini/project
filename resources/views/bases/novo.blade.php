
@extends('layout.site')
@section('titulo','Cadastrar Base')

@section('conteudo')

      <div class="conteudoForm">
        <h3 class="center">Cadastrar Base</h3>


      <form class="" action="{{route('bases.salvar')}}" method="post">
        {{ csrf_field() }}

        

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
