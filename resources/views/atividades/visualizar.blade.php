@extends('layout.site')
@section('titulo','Consultar Atividades')

@section('conteudo')
    <h3 class="center">Visualizar Atividade</h3>
    <strong>Atividade</strong><br />
    <div>{{$registro->atividade}}</div><br />

    <strong>Cliente</strong>
    <div>{{$registro->cliente->nome}}</div>

    <strong>Número do Processo</strong>
    <div>{{$registro->numProcesso}}</div>

    <strong>Dias</strong>
    <div>
        @if($registro->dias == 0)
            "Corrido"
        @else
            "Útil"
        @endif
    </div>

    <strong>Tipo</strong>
    <div>
        {{$registro->tipo}}
    </div>

    <strong>Data do Diário Oficial</strong>
    <div>
        {{$registro->dataDiarioOficial}}
    </div>

    <strong>Data Limite</strong>
    <div>
        {{$registro->dataLimite}}
    </div>

    <strong>Prazo</strong>
    <div>
        {{$registro->prazo}}
    </div>
@endsection
