
@extends('layout.site')
@section('titulo','Cadastrar Empresa')

@section('conteudo')

      <div class="conteudoForm">
    <h3 class="center">Cadastrar Empresa</h3>


      <form class="" action="{{route('empresas.salvar')}}" method="post">
        {{ csrf_field() }}

        <div class="t1">
          <label><br>Nome:<br> </label>
          <input type="text" name="nomeEmpresa" id ="grande">
        </div>

        <div class="t2">
          <label><br> CNPJ:<br> </label>
          <input type="text" name="cnpj" id ="medio">
        </div>

        <div class="t1">
          <label><br> Rua:<br> </label>
          <input type="text" name="ruaEmpresa" id ="grande">
        </div>

        <div class="t3">
          <label><br> Número:<br> </label>
          <input type="text" name="numEmpresa" id ="pequeno">
        </div>

        <div class="t2">
          <label><br> Bairro:<br> </label>
          <input type="text" name="bairroEmpresa" id ="medio">
        </div>     

        
        <div class="t2">
          <label><br> Complemento:<br> </label>
          <input type="text" name="complEmpresa" id ="medio">
        </div>   


        <div class="t3">
          <label><br> CEP:<br> </label>
          <input type="text" name="cepEmpresa" id ="pequeno">
        </div>

        <div class="t2">
          <label><br> Cidade:<br> </label>
          <input type="text" name="cidadeEmpresa" id ="medio">
        </div>   


        <div class="t2">
          <label><br>&#x0260E;Telefone:<br> </label>
          <input type="text" name="telEmpresa" id ="medio">
        </div>

         <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave" >Salvar</button>
        </div>
      </form>

  </div>

@endsection
