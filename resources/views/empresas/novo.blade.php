@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')
    <div class="conteudoForm">
    <h3 class="center">Cadastro de Empresa</h3>
    <div class="row">
      <form class="" action="{{route('empresas.salvar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <label>Nome:<br> </label>
          <input type="text" name="nomeEmpresa" id ="grande">
        </div>

        <div class="input-field">
          <label>CNPJ:<br> </label>
          <input type="text" name="cnpj" id ="medio">
        </div>

        <div class="input-field">
          <label>Rua:<br> </label>
          <input type="text" name="ruaEmpresa" id ="grande">
        </div>

        <div class="input-field">
          <label>Número:<br> </label>
          <input type="text" name="numEmpresa" id ="pequeno">
        </div>

        <div class="input-field">
          <label>Bairro:<br> </label>
          <input type="text" name="bairroEmpresa" id ="medio">
        </div>     

        <div class="input-field">
          <label>Cidade:<br> </label>
          <input type="text" name="cidadeEmpresa" id ="medio">
        </div>   

        <div class="input-field">
          <label>Complemento:<br> </label>
          <input type="text" name="complEmpresa" id ="medio">
        </div>   

        <div class="input-field">
          <label>CEP:<br> </label>
          <input type="text" name="cepEmpresa" id ="pequeno">
        </div>

        <div class="input-field">
          <label>Telefone:<br> </label>
          <input type="text" name="telEmpresa" id ="medio">
        </div>

        <br><button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>

@endsection
