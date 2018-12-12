<div class="t1">
    <label><br />Descrição:<br /></label>
    <input name="descQuestao" type="text" id="grande" value="{{ isset($registro->descQuestao) ? $registro->descQuestao : '' }}">
</div>
<br>
<div class="btn">
    <a  class="btnCancel" href="{{ route('questoes.listar') }}">Cancelar</a>
    <button class="btnSave" style="margin-top: 2%">Salvar</button>
</div>
