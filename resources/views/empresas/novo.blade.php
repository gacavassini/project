@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')
    <div class="container">
    <h3 class="center">Cadastro de Empresa</h3>
    <div class="row">
      <form class="" action="{{route('empresas.salvar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <label>Nome:<br> </label>
          <input type="text" name="nomeEmpresa">
        </div>

        <div class="input-field">
          <label>CNPJ:<br> </label>
          <input type="text" name="cnpj">
        </div>

        <div class="input-field">
          <label>Rua:<br> </label>
          <input type="text" name="ruaEmpresa">
        </div>

        <div class="input-field">
          <label>Número:<br> </label>
          <input type="text" name="numEmpresa">
        </div>

        <div class="input-field">
          <label>Bairro:<br> </label>
          <input type="text" name="bairroEmpresa">
        </div>     

        <div class="input-field">
          <label>Cidade:<br> </label>
          <input type="text" name="cidadeEmpresa">
        </div>   

        <div class="input-field">
          <label>Complemento:<br> </label>
          <input type="text" name="complEmpresa">
        </div>   

        <div class="input-field">
          <label>CEP:<br> </label>
          <input type="text" name="cepEmpresa">
        </div>

        <div class="input-field">
          <label>Telefone:<br> </label>
          <input type="text" name="telEmpresa">
        </div>

        <br><button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>

@endsection
