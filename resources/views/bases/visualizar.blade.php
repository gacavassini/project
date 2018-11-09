@extends('layout.site')
@section('titulo','Visualizar Base')

@section('conteudo')
    <h3 class="center">Visualizar Base</h3>
    <strong>Rótulo</strong><br />
    <div>{{$registro->rotulo}}</div><br />

    <strong>Texto</strong>
    <div>{{$registro->texto}}</div>
@endsection
