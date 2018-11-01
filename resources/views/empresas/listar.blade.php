@extends('layout.site')
@section('titulo','Consultar Empresas')

@section('conteudo')
 <div class="conteudoForm">
    <h3 class="center">Lista de Empresas</h3>
    <div class="search">
        <form>
            <input type="search" placeholder="Search">
        </form>
    </div>
    

    <table class="consulta">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Cidade</th>
                <th>Telefone</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
            <tr>
                <td>{{$empresa->codEmpresa}}</td>
                <td>{{$empresa->nome}}</td>
                <td>{{$empresa->cnpj}}</td>
                <td>{{$empresa->cidade}}</td>
                <td>{{$empresa->telefone}}</td>
     
                <td> <a href="{{ route('empresas.editar',$empresa->codEmpresa)}}"> <img src="{{ url('images/edit-01.png') }}"> </a>  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
    </div>





 
@endsection
