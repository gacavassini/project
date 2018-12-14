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
        @if($questao->descQuestao == "Qual era a jornada de trabalho?" || $questao->descQuestao == "Narre qualquer outra situação que possa ter te incomodado" || $questao->descQuestao == "O que exatamente fazia?")
            <textarea name="{{$questao->codQuestao}}" id="grande" cols="80" rows="4" style="height: 90%"></textarea>
        @elseif($questao->descQuestao == "Data de Admissão")
            <input name="{{$questao->codQuestao}}" id="datepickerAd" class="grande" autocomplete="off">
        @elseif($questao->descQuestao == "Data de Demissão")
            <input name="{{$questao->codQuestao}}" id="datepickerDe" class="grande" autocomplete="off">
        @else
            <input name="{{$questao->codQuestao}}" type="text" id="grande">
        @endif
    </div>
@endforeach

<br>
<div class="btn">
<a  class="btnCancel" href="{{ route('entrevistas.listar') }}">Cancelar</a>
<button class="btnSave"  >Salvar</button>
</div>

@section('javascript')
  <script>
    $("#datepickerAd").datepicker();
    $("#datepickerDe").datepicker();
  </script>
  <style>
    .pequeno{
      width: 50%;
      height: 4vh;
      margin: 0.5% 0%;
      display: inline-block;
    }
    .grande{
        /*width: 60%;*/
        height: 4vh;
        margin: 0.5% 0%;

        display: inline-block;
    }
  </style>
@endsection
