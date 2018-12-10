<div class="t1">
  <label><br>Nome:<br> </label>
  <input type="text" name="nome" id ="grande" value="{{isset($empresa->nome) ? $empresa->nome : ''}}">
</div>

<div class="t2">
  <label><br> CNPJ:<br> </label>
  <input type="text" name="cnpj" id ="medio" value="{{isset($empresa->cnpj) ? $empresa->cnpj : ''}}">
</div>

<div class="t1">
  <label><br> Rua:<br> </label>
  <input type="text" name="rua" id ="grande" value="{{isset($empresa->rua) ? $empresa->rua : ''}}">
</div>

<div class="t3">
  <label><br> Número:<br> </label>
  <input type="text" name="numEndereco" id ="pequeno" value="{{isset($empresa->numEndereco) ? $empresa->numEndereco : ''}}">
</div>

<div class="t2">
  <label><br> Bairro:<br> </label>
  <input type="text" name="bairro" id ="medio" value="{{isset($empresa->bairro) ? $empresa->bairro : ''}}">
</div>


<div class="t2">
  <label><br> Complemento:<br> </label>
  <input type="text" name="complemento" id ="medio" value="{{isset($empresa->complemento) ? $empresa->complemento : ''}}">
</div>

<div class="t3">
  <label><br> CEP:<br> </label>
  <input type="text" name="cep" id ="pequeno" value="{{isset($empresa->cep) ? $empresa->cep : ''}}">
</div>

<div class="t2">
  <label><br> Cidade:<br> </label>
  <input type="text" name="cidade" id ="medio" value="{{isset($empresa->cidade) ? $empresa->cidade : ''}}">
</div>

<div class="t2">
  <label><br> Telefone:<br> </label>
  <input type="text" name="telefone" id ="medio" value="{{isset($empresa->telefone) ? $empresa->telefone : ''}}">
</div>

 <br>
<div class="btn">
  <button class="btnCancel">Cancelar</button>
  <button class="btnSave" style="margin-top: 2%" >Salvar</button>
</div>
