@extends('layout.site')
@section('titulo','Lista de Petições')
@section('conteudo')
 
<div class="conteudoForm">
  <h3 class="center">Lista de Petições<br></h3>
  <table class="consulta" id="tpeq">
    <br>
    <thead>
      <tr>
        <th>Código da Petição</th>

        <th>Data de Criação</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($peticoes as $peticao)
        <tr>
          <td>{{ $peticao->codPeticao }}</td>
          <td>{{ $peticao->created_at }}</td>
          <td>
              <a href="{{ route('peticoes.editar',$peticao->codPeticao)}}">
                  <img width="10%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="">
                  <img width="12%" src="{{ url('images/see-01.png') }}">
              </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('peticoes.novo') }}">Adicionar</a>
</div>
@endsection
