@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')
    <div class="conteudoForm">
    <h3 class="center">Cadastro de Cliente</h3>
    <div class="row">
      <form class="" action="{{route('clientes.salvar')}}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <label>Nome:<br> </label>
          <input type="text" name="nome">
        </div>
          <div class="input-field">
          <label><br>CPF:<br></label>
          <input type="text" name="cpf">
        </div>
          <div class="input-field">
          <label><br>RG:<br></label>
          <input type="text" name="cpf">
        </div>
          <div class="input-field">
          <label><br>Profissão:<br></label>
          <input type="text" name="profissao">
        </div>
        <div class="input-field">
          <label><br>Estado Civil:<br></label>
          <input type="text" name="estadoCivil">
        </div>
        <div class="input-field">
          <label><br>Rua:<br></label>
          <input type="text" name="rua">
         </div>
         <div class="input-field">
          <label><br>Número:<br></label>
          <input type="text" name="numEndereco">
        </div>
        <div class="input-field">
          <label><br>Bairro:<br></label>
          <input type="text" name="bairro">
        </div>
        <div class="input-field">
          <label><br>Complemento:<br></label>
          <input type="text" name="complemento">
        </div>
        <div class="input-field">
          <label><br>CEP:<br></label>
          <input type="text" name="cep">
        </div>
        <div class="input-field">
          <label><br>Cidade:<br></label>
          <input type="text" name="cidade">
        </div>
        <div class="input-field">
          <label><br>Telefone Residencial:<br></label>
          <input type="text" name="telefoneRes">
        </div>
        <div class="input-field">
          <label><br>Celular:<br></label>
          <input type="text" name="celular">
        </div>
        <div class="input-field">
          <label><br>Telefone para contato:<br></label>
          <input type="text" name="telefoneContato">
        </div>
        <div class="input-field">
          <label><br>E-mail:<br></label>
          <input type="text" name="email">
        </div>




        <br><button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>

@endsection
