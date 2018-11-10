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
  <div class="select-box">
    <label><span><br>Selecionar Empresa</span><br></label>
    <select id="medio" name="codEmpresa" style="width: 68%; height:4vh" >
      <option value=""></option>
      @foreach($empresas as $empresa)
        <option value="{{$empresa->codEmpresa}}" @if(isset($registro))
          @if($registro->codEmpresa == $empresa->codEmpresa)
            selected="selected" @endif @endif>{{$empresa->nome}}</option>
      @endforeach
    </select>
  </div><!--Fechou select box do cliente -->
</div>

@foreach($questoes as $questao)
    <div class="t1">
        <label><span><br />{{$questao->descQuestao}}</span><br /></label>
        <input name="{{$questao->codQuestao}}" type="text" id="grande">
    </div>
@endforeach

<br>
<div class="btn">
<button class="btnCancel">Cancelar</button>
<button class="btnSave" >Salvar</button>
</div>
