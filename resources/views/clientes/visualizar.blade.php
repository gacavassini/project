@extends('layout.site')
@section('titulo','Visualizar Cliente')

@section('conteudo')
<div class="conteudoForm">
    <h3 class="center">Visualizar Cliente</h3>
    <strong>Nome</strong><br />
    <div>{{$registro->nome}}</div><br />

    <strong>CPF</strong>
    <div>{{$registro->cpf}}</div><br />

    <strong>RG</strong>
    <div>{{$registro->rg}}</div><br />

    <strong>Profissão</strong>
    <div>{{$registro->profissao}}</div><br />

    <strong>Estado Civil</strong>
    <div>
        {{$registro->estadoCivil}}
    </div><br />

    <strong>Rua</strong>
    <div>
        {{$registro->rua}}
    </div><br />

    <strong>Número</strong>
    <div>
        {{$registro->numEndereco}}
    </div><br />

    <strong>Bairro</strong>
    <div>
        {{$registro->bairro}}
    </div><br />

    <strong>Complemento</strong>
    <div>{{$registro->complemento}}</div><br />

    <strong>CEP</strong>
    <div>{{$registro->cep}}</div><br />

    <strong>Cidade</strong>
    <div>{{$registro->cidade}}</div><br />

    <strong>Telefone Residencial</strong>
    <div>{{$registro->telefoneRes}}</div><br />

    <strong>Celular</strong>
    <div>{{$registro->celular}}</div><br />

    <strong>Telefone para contato</strong>
    <div>{{$registro->telefoneContato}}</div><br />

    <strong>Email</strong>
    <div>{{$registro->email}}</div><br />
    </div>
@endsection
