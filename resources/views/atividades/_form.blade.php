<div class="t1">
  <label> <br>Atividade:<br> </label>
  <input id="grande" type="text" name="atividade" value="{{ isset($registro->atividade) ? $registro->atividade : '' }}">
</div>

<div class="t2">
  <div class="select-box">
    <label><span><br>Selecionar Cliente</span><br></label>
    <select id="medio" name="codCliente" style="width: 68%; height:4vh" >
      <option value=""></option>
      @foreach($clientes as $cliente)
        <option value="{{$cliente->codCliente}}" @if(isset($registro))
          @if($registro->codCliente == $cliente->codCliente)
            selected="selected" @endif @endif>{{$cliente->nome}}</option>
      @endforeach
    </select>
  </div><!--Fechou select box do cliente -->
</div>

<div class="t2">
  <label> <br>Numero Processo:<br> </label>
  <input id="medio" type="text" name="numProcesso" value="{{ isset($registro->atividade) ? $registro->atividade : '' }}">
</div>


  <div class="t3">
  <label> <br>Dias:<br> </label>
  <input type="radio" name="dias" value="0"  id="radio" {{ $registro->dias == '0' ? 'checked' : '' }}>Corrido
  <input  type="radio" name="dias" value="1" id="radio" {{ $registro->dias == '1' ? 'checked' : '' }}>Útil
</div>


<div class="t3">
  <label> <br>Tipo: <br> </label>
  <input id="radio" type="radio" name="tipo" value="fisico" {{ $registro->tipo == 'fisico' ? 'checked' : '' }}> Físico
  <input id="radio" type="radio" name="tipo" value="eletronico" {{ $registro->tipo == 'eletronico' ? 'checked' : '' }}> Eletrônico
</div>



<div class="t3">
  <label><br>Data do Diário Oficial:<br></label>
  <input id="datepicker" type="text" name="dataDiarioOficial" style="width: 70; height: 4vh; margin: 0.5% 0%; display: inline-block;" value="{{ isset($registro->atividade) ? $registro->atividade : '' }}">
</div>



<div class="t3">
  <label> <br>Data Limite:<br> </label>
  <input id="medio" type="text" name="dataLimite" value="{{ isset($registro->atividade) ? $registro->atividade : '' }}">
</div>

<div class="t1">
  <label> <br>Obervações:<br> </label>
  <textarea id="grande" name="observacao" cols="80" rows="7" style="height: 90%">{{ isset($registro->atividade) ? $registro->atividade : '' }}</textarea>
</div>

<br>
<div class="btn">
  <button class="btnCancel">Cancelar</button>
  <button class="btnSave">Salvar</button>
</div>
