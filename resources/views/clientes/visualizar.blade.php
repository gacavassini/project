@extends('layout.site')
@section('titulo','Visualizar Cliente')

@section('conteudo')
<div class="conteudoForm">
    
    <h3 class="center" style="margin-bottom: 3%;margin-top: 2%">Visualizar Cliente <br></h3>

    <div class="t1">
    <strong>Nome</strong><br />
    <div>{{$registro->nome}}</div><br />
    </div>

    <div class="t2">
    <strong>CPF</strong>
    <div>{{$registro->cpf}}</div><br />
    </div>

    <div class="t2">
    <strong>RG</strong>
    <div>{{$registro->rg}}</div><br />
    </div>

    <div class="t2">
    <strong>Profissão</strong>
    <div>{{$registro->profissao}}</div><br />
</div>

    <div class="t2">
    <strong>Estado Civil</strong>
    <div>
        {{$registro->estadoCivil}}
    </div><br />
</div>

    <div class="t2">
    <strong>Rua</strong>
    <div>
        {{$registro->rua}}
    </div><br />
</div>

    <div class="t3">
    <strong>Número</strong>
    <div>
        {{$registro->numEndereco}}
    </div><br />
</div>

    <div class="t2">
    <strong>Bairro</strong>
    <div>
        {{$registro->bairro}}
    </div><br />
</div>

    <div class="t2">
    <strong>Complemento</strong>
    <div>{{$registro->complemento}}</div><br />
</div>

    <div class="t3">
    <strong>CEP</strong>
    <div>{{$registro->cep}}</div><br />
</div>

<div class="t2">
    <strong>Cidade</strong>
    <div>{{$registro->cidade}}</div><br />
</div>

    <div class="t2">
    <strong>Telefone Residencial</strong>
    <div>{{$registro->telefoneRes}}</div><br />
</div>

<div class="t2">
    <strong>Celular</strong>
    <div>{{$registro->celular}}</div><br />
</div>

    <div class="t2">
    <strong>Telefone para contato</strong>
    <div>{{$registro->telefoneContato}}</div><br />
</div>
    
    <div class="t2">
    <strong>Email</strong>
    <div>{{$registro->email}}</div><br />
    </div>
</div>
@endsection
