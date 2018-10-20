@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')

<div class="conteudoForm">

    <h3 class="center">Cadastro de Cliente</h3> <br>
   
      <form class="" action="{{route('clientes.salvar')}}" method="post">
        {{ csrf_field() }}

          <div class="input-field" >
            <label>Nome:<br> </label>
            <input id="grande" type="text" name="nome">
          </div>

          <div class="linha">

          
           <div class="input-field">
            <label><br>CPF:<br></label>
            <input id="medio" type="text" name="cpf">
           </div>
          <div class="input-field">
          <label>RG:<br></label>
          <input type="text" name="cpf"  id="medio">
        </div>
        </div>
        


          <div class="input-field">
          <label><br>Profissão:<br></label>
          <input type="text" name="profissao" id="medio">
        </div>
        <div class="select-box">
          <label><br>Estado Civil:<br></label>
          <select id="select" name="estadoCivil"> 
            <option value="0">Solteiro</option>
            <option value="1">Casado</option>
            <option value="2">Separado</option>
            <option value="3">Divorciado</option>
            <option value="4">Viúvo</option>
            <option value="5">Amasiado</option>
          </select> 
        </div>
        <div class="input-field">
          <label><br>Rua:<br></label>
          <input type="text" name="rua"  id="grande">
         </div>
         <div class="input-field">
          <label><br>Número:<br></label>
          <input type="text" name="numEndereco" id="pequeno">
        </div>
        <div class="input-field">
          <label><br>Bairro:<br></label>
          <input type="text" name="bairro" id="medio">
        </div>
        <div class="input-field">
          <label><br>Complemento:<br></label>
          <input type="text" name="complemento" id="medio">
        </div>
        <div class="input-field">
          <label><br>CEP:<br></label>
          <input type="text" name="cep" id="pequeno">
        </div>
        <div class="input-field">
          <label><br>Cidade:<br></label>
          <input type="text" name="cidade" id="medio">
        </div>
        <div class="input-field">
          <label><br>Telefone Residencial:<br></label>
          <input type="text" name="telefoneRes" id="medio">
        </div>
        <div class="input-field">
          <label><br>Celular:<br></label>
          <input type="text" name="celular" id="medio">
        </div>
        <div class="input-field">
          <label><br>Telefone para contato:<br></label>
          <input type="text" name="telefoneContato" id="medio">
        </div>
        <div class="input-field">
          <label><br>E-mail:<br></label>
          <input type="text" name="email" id="grande">
        </div>

        <br>
        <button class="btnCancel">Cancelar</button>
        <button class="btnSave">Salvar</button>
      </form>
   

</div> <!--Fechou conteudo-->

@endsection
