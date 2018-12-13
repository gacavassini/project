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
                        {{$atrasado->atividade}}
                        <div id="codAtividade" style="display: none;">{{$atrasado->codAtividade}}</div>
                    </td>
                    <td>{{$atrasado->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$atrasado->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" class="checkAtiv" type="checkbox" value="{{$atrasado->codAtividade}}">
                        <br>

                        <button id="dialog-link" class="ui-button ui-corner-all ui-widget dialog-link">
                            <span id="ui-icon ui-icon-newwin"></span>Detalhes
                        </button>
                        <!-- ui-dialog -->
                        <div id="dialog" class="dialog" title="{{$atrasado->atividade}}">
                            <p><strong>Cliente: </strong>{{$atrasado->cliente->nome}}</p>
                            <p><strong>Número do Processo: </strong>{{$atrasado->numProcesso}}</p>
                            <p><strong>Dias: </strong>{{($atrasado->dias == 0) ? "Corrido" : "Útil"}}</p>
                            <p><strong>Tipo: </strong>{{($atrasado->tipo == "fisico") ? "Físico" : "Eletrônico"}}</p>
                            <p><strong>Data Diário Oficial: </strong>{{$atrasado->dataDiarioOficial}}</p>
                            <p><strong>Prazo: </strong>{{$atrasado->prazo}} dias</p>
                            <p><strong>Data Limite: </strong>{{$atrasado->formataDataLimite($atrasado->dataLimite)}}</p>
                            <p><strong>Status: </strong>{{($atrasado->status == 1) ? "Pendente" : "Concluído"}}</p>
                            <p><strong>Observações: </strong>{{ isset($atrasado->observacao) ? $atrasado->observacao : '' }}</p>
                        </div><!-- Final do dialog -->

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
                        <button id="dialog-link" class="ui-button ui-corner-all ui-widget">
                            <span class="ui-icon ui-icon-newwin"></span>Detalhes
                        </button>
                        <!-- ui-dialog -->
                        <div id="dialog" title="{{$fisico->atividade}}">
                            <p><strong>Cliente: </strong>{{$fisico->cliente->nome}}</p>
                            <p><strong>Número do Processo: </strong>{{$fisico->numProcesso}}</p>
                            <p><strong>Dias: </strong>{{($fisico->dias == 0) ? "Corrido" : "Útil"}}</p>
                            <p><strong>Tipo: </strong>{{($fisico->tipo == "fisico") ? "Físico" : "Eletrônico"}}</p>
                            <p><strong>Data Diário Oficial: </strong>{{$fisico->dataDiarioOficial}}</p>
                            <p><strong>Prazo: </strong>{{$fisico->prazo}} dias</p>
                            <p><strong>Data Limite: </strong>{{$fisico->formataDataLimite($fisico->dataLimite)}}</p>
                            <p><strong>Status: </strong>{{($fisico->status == 1) ? "Pendente" : "Concluído"}}</p>
                            <p><strong>Observações: </strong>{{ isset($fisico->observacao) ? $fisico->observacao : '' }}</p>
                        </div><!-- Final do dialog -->
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
