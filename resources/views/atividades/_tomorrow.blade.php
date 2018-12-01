@if($eletronicosTomorrow->isNotEmpty())
    <table class="consultarAtividade">
        <thead>
            <tr>
                <th id="maior">Atividade</th>
                <th id="maior">Cliente</th>
                <th id="peq">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eletronicosTomorrow as $eletronico)
                <tr>
                    <td>{{$eletronico->atividade}}</td>
                    <td>{{$eletronico->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$eletronico->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" type="checkbox" value="">
                        <br>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@if($fisicosTomorrow->isNotEmpty())
    <table class="consultarAtividade">
        <thead>
            <tr>
                <th id="maior">Atividade</th>
                <th id="maior">Cliente</th>
                <th id="peq">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fisicosTomorrow as $fisico)
                <tr>
                    <td>{{$fisico->atividade}}</td>
                    <td>{{$fisico->cliente->nome}}</td>
                    <td>
                        <a href="{{ route('atividades.editar',$fisico->codAtividade)}}">
                            <img width="13%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <input id="checkAtiv" type="checkbox" value="">
                        <br>
                        <a href="">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
