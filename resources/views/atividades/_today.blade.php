@if($atrasados->isNotEmpty())
<h3 style="color: red">Atrasados</h3>
    <table class="consultarAtividade" >
        <thead>
            <tr>
                <th id="maior">Atividade</th>
                <th id="maior">Cliente</th>
                <th id="peq">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atrasados as $atrasado)
                @if($atrasado->status == 1)
                <tr  id="atrasado">
                    <td>
                        {{($atrasado->tipo == 'eletronico') ? 'E' : 'F' }} | {{$atrasado->atividade}}
                        <div id="codAtividade" style="display: none;">{{$atrasado->codAtividade}}</div>
                    </td>
                    <td>{{$atrasado->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$atrasado->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" class="checkAtiv" type="checkbox" value="{{$atrasado->codAtividade}}">
                        <br>
                        <a href="">Detalhes</a>
                        

                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endif

@if($fisicos->isNotEmpty())
<h3 style="color: #0b3e93">Físicos</h3>
    <table class="consultarAtividade">
        <thead>
            <tr>
                <th id="maior">Atividade</th>
                <th id="maior">Cliente</th>
                <th id="peq">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fisicos as $fisico)
                <tr id="fisico">
                    <td>
                        {{$fisico->atividade}}
                        <div id="codAtividade" style="display: none;">{{$fisico->codAtividade}}</div>
                    </td>
                    <td>{{$fisico->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$fisico->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" class="checkAtiv" type="checkbox" value="">
                        <br>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@if($eletronicos->isNotEmpty())
<h3 style="color: black">Eletrônicos</h3>
    <table class="consultarAtividade">
        <thead>
            <tr>
                <th id="maior">Atividade</th>
                <th id="maior">Cliente</th>
                <th id="peq">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eletronicos as $eletronico)
                <tr id="eletronico">
                    <td>
                        {{$eletronico->atividade}}
                        <div id="codAtividade" style="display: none;">{{$eletronico->codAtividade}}</div>
                    </td>
                    <td>{{$eletronico->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$eletronico->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" class="checkAtiv" type="checkbox" value="">
                        <br>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
