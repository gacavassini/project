<style>
/* The switch - the box around the slider */
.switch {
position: relative;
display: inline-block;
width: 60px;
height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
opacity: 0;
width: 0;
height: 0;
}

/* The slider */
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
-webkit-transition: .4s;
transition: .4s;
}

.slider:before {
position: absolute;
content: "";
height: 26px;
width: 26px;
left: 4px;
bottom: 4px;
background-color: white;
-webkit-transition: .4s;
transition: .4s;
}

input:checked + .slider {
background-color: #2196F3;
}

input:focus + .slider {
box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
-webkit-transform: translateX(26px);
-ms-transform: translateX(26px);
transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
border-radius: 34px;
}

.slider.round:before {
border-radius: 50%;
}
</style>

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
  <input id="medio" type="text" name="numProcesso" value="{{ isset($registro->numProcesso) ? $registro->numProcesso : '' }}">
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
  <input id="datepicker" type="text" name="dataDiarioOficial" autocomplete="off" style="width: 70; height: 4vh; margin: 0.5% 0%; display: inline-block;" value="{{ isset($registro->dataDiarioOficial) ? $registro->dataDiarioOficial : '' }}">
</div>

<div class="t3">
  <label> <br>Prazo:<br></label>
  <input name="prazo" id="pequeno" type="text" value="{{ isset($registro->prazo) ? $registro->prazo : '' }}">
</div>

<div class="t3">
  <label> <br>Data Limite:<br> </label>
  <input id="medio" type="hidden" name="dataLimite" value="{{ isset($registro->dataLimite) ? $registro->dataLimite : '' }}">
  <input id="medio" type="text" name="dataLimiteShow" value="{{ isset($registro->dataLimite) ? $registro->dataLimite : '' }}" disabled>
</div>

<div class="t3">
    <div class="widget">
        <fieldset id="fieldset">
            <legend>Hotel Ratings: </legend>
            <label for="status">Status</label>
            <input type="checkbox" name="status" id="status">
        </fieldset>
    </div>
</div>

<div class="t1">
  <label> <br>Obervações:<br> </label>
  <textarea id="grande" name="observacao" cols="80" rows="7" style="height: 90%">{{ isset($registro->atividade) ? $registro->atividade : '' }}</textarea>
</div>

<br>
<div class="btn">
  <!--<button class="btnCancel">Cancelar</button>-->
  <a  class="btnCancel" href="{{ route('atividades.listar') }}">Cancelar</a>
  <button class="btnSave">Salvar</button>
</div>

@section('javascript')
    <script>
        var url = "https://api.calendario.com.br/?json=true&ano=2018&estado=SP&cidade=MOGI_GUACU&token=ZGdvLmRpZWdvY2FydmFsaG9AZ21haWwuY29tJmhhc2g9MTYzMjcxMDY3";
    	var feriados = [];
    	$.getJSON(url).then(function(data){
    		for(var i = 0; i < data.length; i++){
    		    var obj = {dia: data[i].date, nome: data[i].name};
    			feriados[i] = obj;
    		}
    	});
    </script>
    <script src="{{ url('/js/atividades.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/jquery.mask.js') }}"></script>
    <script>
    $(document).ready(function(){
        var data = $("input[name=dataLimiteShow]").val();
        var dataArr = data.split("-");
        $("input[name=dataLimiteShow]").val(dataArr[2] + "-" + dataArr[1] + "-" + dataArr[0])
        $("input[name=dataLimiteShow]").mask('00/00/0000', { reverse : true });
    });
    </script>
    <script>
        $( function() {
            $( "#status" ).checkboxradio();
            $( "#fieldset" ).controlgroup();
        } );
    </script>
@endsection
