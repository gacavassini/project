@extends('layout.site')
@section('titulo',Route::currentRouteName())

@section('conteudo')

<div class="conteudoForm">
   
    
    <h3 class="center">Cadastro de Cliente</h3>
   
      <form class="" action="{{route('clientes.salvar')}}" method="post">
        {{ csrf_field() }}

          <div class="t1" >
            <label> <br>Nome:<br> </label>
            <input id="grande" type="text" name="nome">
          </div>

          <div class="linha2">

          
           <div class="t2">
            <label><br>CPF:<br></label>
            <input id="medio" type="text" name="cpf">    
           </div>
          <div class="t2">
          <label><br>RG:<br></label>
          <input type="text" name="cpf"  id="medio">
        </div>
        </div>
        


          <div class="t2">
          <label><br>Profissão:<br></label>
          <input type="text" name="profissao" id="medio">
        </div>
        <div class="t2">
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
        <div class="t1">
          <label><br>Rua:<br></label>
          <input type="text" name="rua"  id="grande">
         </div>
         <div class="t3">
          <label><br>Número:<br></label>
          <input type="text" name="numEndereco" id="pequeno">
        </div>
        <div class="t2">
          <label><br>Bairro:<br></label>
          <input type="text" name="bairro" id="medio">
        </div>
        <div class="t2">
          <label><br>Complemento:<br></label>
          <input type="text" name="complemento" id="medio">
        </div>
        <div class="t3">
          <label><br>CEP:<br></label>
          <input type="text" name="cep" id="pequeno">
        </div>
        <div class="t2">
          <label><br>Cidade:<br></label>
          <input type="text" name="cidade" id="medio">
        </div>
        <div class="t2"> 
          <br><br><br><br>
        </div>
        <div class="t2">
          <label><br>Telefone Residencial:<br></label>
          <input type="text" name="telefoneRes" id="medio">
        </div>
        <div class="t2">
          <label><br>Celular:<br></label>
          <input type="text" name="celular" id="medio">
        </div>
        <div class="t2">
          <label><br>Telefone para contato:<br></label>
          <input type="text" name="telefoneContato" id="medio">
        </div>
        <div class="t1">
          <label><br>E-mail:<br></label>
          <input type="text" name="email" id="grande">
        </div>

        <br>
        <div class="btn">
          <button class="btnCancel">Cancelar</button>
          <button class="btnSave">Salvar</button>
        </div>
        
      </form>
   

</div> <!--Fechou conteudo-->

@endsection
