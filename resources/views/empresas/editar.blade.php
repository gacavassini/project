
@extends('layout.site')
@section('titulo','Editar Empresa')

@section('conteudo')

      <div class="conteudoForm">
    <h3 class="center">Editar Empresa</h3>


      <form class="" action="{{route('empresas.atualizar', '$empresa->codEmpresa')}}" method="post">
        {{ csrf_field() }}

        <div class="t1">
          <label><br>Nome:<br> </label>
          <input type="text" name="nome" id ="grande">
        </div>

        <div class="t2">
          <label><br> CNPJ:<br> </label>
          <input type="text" name="cnpj" id ="medio">
        </div>

        <div class="t1">
          <label><br> Rua:<br> </label>
          <input type="text" name="rua" id ="grande">
        </div>

        <div class="t3">
          <label><br> Número:<br> </label>
          <input type="text" name="numEndereco" id ="pequeno">
        </div>

        <div class="t2">
          <label><br> Bairro:<br> </label>
          <input type="text" name="bairro" id ="medio">
        </div>     

        
        <div class="t2">
          <label><br> Complemento:<br> </label>
          <input type="text" name="complemento" id ="medio">
        </div>   


        <div class="t3">
          <label><br> CEP:<br> </label>
          <input type="text" name="cep" id ="pequeno">
        </div>

        <div class="t2">
          <label><br> Cidade:<br> </label>
          <input type="text" name="cidade" id ="medio">
        </div>   


        <div class="t2">
          <label><br> Telefone:<br> </label>
          <input type="text" name="telefone" id ="medio">
        </div>

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
