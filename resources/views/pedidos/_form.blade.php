<div class="t3">
    <div class="select-box">
        <label><span><br>Tipo:</span><br></label>
        <select id="pequeno" name="tipo" style="width: 68%; height:4vh" >
            <option value=""></option>
            <option value=true @if(isset($registro)) @if($registro->tipo == true) selected="selected" @endif @endif>Padrão</option>
            <option value=false @if(isset($registro)) @if($registro->tipo == false) selected="selected" @endif @endif>Específico</option>
        </select>
    </div><!--Fechou select box do cliente -->
</div>

<div class="t1">
    <label> <br>Nome:<br> </label>
    <input name="nomePedido" id="grande" type="text" value="{{ isset($registro->nomePedido) ? $registro->nomePedido : '' }}">
</div>

<div class="t1">
  <label> <br>Fundamentos:<br> </label>
  <textarea id="grande" name="fundamento" cols="80" rows="7" style="height: 90%">{{ isset($registro->fundamento) ? $registro->fundamento : '' }}</textarea>
</div>

<div class="t1">
  <label> <br>Resumo:<br> </label>
  <textarea id="grande" name="resumo" cols="80" rows="7" style="height: 90%">{{ isset($registro->resumo) ? $registro->resumo : '' }}</textarea>
</div>
<br>
<div class="btn">
    <a  class="btnCancel" href="{{ route('pedidos.listar') }}">Cancelar</a>
    <button class="btnSave" style="margin-top: 2%" >Salvar</button>
</div>
