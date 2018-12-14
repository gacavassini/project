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
            @foreach($atrasados as $key => $atrasado)
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
                        @if($key == 0)
                            <a href="javascript:void(0)" id="dialog-link">Detalhes</a>
                            <!-- ui-dialog -->

                            <div id="dialog" title="{{$atrasado->atividade}}">
                                <p><strong>Status: </strong>{{($atrasado->status == 1) ? "Pendente" : "Concluido"}}</p>
                                <p><strong>Cliente: </strong>{{$atrasado->cliente->nome}}</p>
                                <p><strong>Número do Processo: </strong>{{$atrasado->numProcesso}}</p>
                                <p><strong>Dias: </strong>{{($atrasado->dias == 0) ? "Corrido" : "Útil"}}</p>
                                <p><strong>Tipo: </strong>{{($atrasado->tipo == "fisico") ? "Físico" : "Eletrônico"}}</p>
                                <p><strong>Data Diário Oficial: </strong>{{$atrasado->dataDiarioOficial}}</p>
                                <p><strong>Prazo: </strong>{{$atrasado->prazo}} dias</p>
                                <p><strong>Data Limite: </strong>{{$atrasado->formataDataLimite($atrasado->dataLimite)}}</p>
                                <p><strong>Obervação: </strong>{{$atrasado->observacao}}</p>
                            </div>
                        @else
                            <a href="javascript:void(0)">Detalhes</a>
                        @endif

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
