<div class="t1" >
    <label> <br>Nome:<br> </label>
    <input id="grande" type="text" name="nome" value="{{isset($cliente->nome) ? $cliente->nome : ''}}">
</div>

<div class="linha2">
    <div class="t2">
        <label><br>CPF:<br></label>
        <input id="medio" type="text" name="cpf" value="{{isset($cliente->cpf) ? $cliente->cpf : ''}}">
    </div>

    <div class="t2">
        <label><br>RG:<br></label>
        <input type="text" name="rg" id="medio" value="{{isset($cliente->rg) ? $cliente->rg : ''}}">
    </div>
</div>

<div class="t2">
    <label><br>Profissão:<br></label>
    <input type="text" name="profissao" id="medio" value="{{isset($cliente->profissao) ? $cliente->profissao : ''}}">
</div>

<div class="t2">
    <label><br>Estado Civil:<br></label>
    <select id="select" name="estadoCivil">
        <option value=""></option>
        <option value="Solteiro" @if(isset($cliente)) @if($cliente->estadoCivil == "Solteiro") selected="selected" @endif @endif>Solteiro(a)</option>
        <option value="Casado" @if(isset($cliente)) @if($cliente->estadoCivil == "Casado") selected="selected" @endif @endif>Casado(a)</option>
        <option value="Separado" @if(isset($cliente)) @if($cliente->estadoCivil == "Separado") selected="selected" @endif @endif>Separado(a)</option>
        <option value="Divorciado" @if(isset($cliente)) @if($cliente->estadoCivil == "Divorciado") selected="selected" @endif @endif>Divorciado(a)</option>
        <option value="Viúvo" @if(isset($cliente)) @if($cliente->estadoCivil == "Viuvo") selected="selected" @endif @endif>Viúvo(a)</option>
        <option value="Amasiado" @if(isset($cliente)) @if($cliente->estadoCivil == "Amasiado") selected="selected" @endif @endif>Amasiado(a)</option>
    </select>
</div>

<div class="t1">
    <label><br>Rua:<br></label>
    <input type="text" name="rua"  id="grande" value="{{isset($cliente->rua) ? $cliente->rua : ''}}">
</div>

<div class="t3">
    <label><br>Número:<br></label>
    <input type="text" name="numEndereco" id="pequeno" value="{{isset($cliente->numEndereco) ? $cliente->numEndereco : ''}}">
</div>

<div class="t2">
    <label><br>Bairro:<br></label>
    <input type="text" name="bairro" id="medio" value="{{isset($cliente->bairro) ? $cliente->bairro : ''}}">
</div>

<div class="t2">
    <label><br>Complemento:<br></label>
    <input type="text" name="complemento" id="medio" value="{{isset($cliente->complemento) ? $cliente->complemento : ''}}">
</div>

<div class="t3">
    <label><br>CEP:<br></label>
    <input type="text" name="cep" id="pequeno" value="{{isset($cliente->cep) ? $cliente->cep : ''}}">
</div>

<div class="t2">
    <label><br>Cidade:<br></label>
    <input type="text" name="cidade" id="medio" value="{{isset($cliente->cidade) ? $cliente->cidade : ''}}">
</div>

<div class="t2">
<br><br><br><br>
</div>

<div class="t2">
    <label><br>Telefone Residencial:<br></label>
    <input type="text" name="telefoneRes" id="medio" value="{{isset($cliente->telefoneRes) ? $cliente->telefoneRes : ''}}">
</div>

<div class="t2">
    <label><br>Celular:<br></label>
    <input type="text" name="celular" id="medio" value="{{isset($cliente->celular) ? $cliente->celular : ''}}">
</div>

<div class="t2">
    <label><br>Telefone para contato:<br></label>
    <input type="text" name="telefoneContato" id="medio" value="{{isset($cliente->telefoneContato) ? $cliente->telefoneContato : ''}}">
</div>

<div class="t1">
    <label><br>E-mail:<br></label>
    <input type="text" name="email" id="grande" value="{{isset($cliente->email) ? $cliente->email : ''}}">
</div>

<br>
<div class="btn">
    <a  class="btnCancel" href="{{ route('clientes.listar') }}">Cancelar</a>
    <button class="btnSave">Salvar</button>
</div>
