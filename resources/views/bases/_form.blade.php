<div class="t1">
  <label> <br>Rótulo:<br> </label>
  <input id="grande" type="text" name="rotulo" value="{{isset($registro->rotulo) ? $registro->rotulo : ''}}">
</div>

<div class="t1">
  <label> <br>Texto:<br> </label>
  <input id="grande" type="text" name="texto" value="{{isset($registro->texto) ? $registro->texto : ''}}">
</div>

<!-- tratar o codRot -->
<input type="hidden" name="codRot" value="{{isset($registro->codRot) ? $registro->codRot : '0'}}">

<br>
<div class="btn">
<button class="btnCancel">Cancelar</button>
<button class="btnSave" style="margin-top: 2%" >Salvar</button>
</div>
