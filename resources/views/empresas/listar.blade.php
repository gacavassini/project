@extends('layout.site')
@section('titulo','Consultar Empresas')

@section('conteudo')
 <div class="conteudoForm">
   
     <h2 class="center" style="margin-bottom: 2%">Lista de Empresas</h2>
       <div id="busca"> 
          <a href="{{ route('empresas.novo') }}">
                  <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
               </a>
          <div class="search">
            <form>
               <input  type="search" id="BuscaPet" placeholder="Nome da Empresa">
            </form>
          </div>
      </div><br>
        

    <table class="consulta">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Ação</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
            <tr>
                <td>{{$empresa->nome}}</td>
                <td>{{$empresa->cnpj}}</td>
                <td>{{$empresa->cidade}}</td>
                <td>{{$empresa->telefone}}</td>
     
                <td style="width: 10%;"> <a href="{{ route('empresas.editar',$empresa->codEmpresa)}}"> <img width="28%" src="{{ url('images/edit-01.png') }}"> </a>  
                <a href="{{ route('empresas.visualizar', $empresa->codEmpresa) }}">
                  <img width="36%" src="{{ url('images/see-01.png') }}">
              </a>
                </td></tr>
            @endforeach
        </tbody>
    </table>
  
    </div>





 
@endsection
