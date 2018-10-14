@extends('layout.site')

@section('conteudo')
  <h3 class="center">Lista de Petições</h3>
  <table>
    <thead>
      <tr>
        <th>Código da Petição</th>
        <th>Fatos</th>
        <th>Data de Criação</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($peticoes as $peticao)
        <tr>
          <td>{{ $peticao->codPeticao }}</td>
          <td>{{ $peticao->fatos }}</td>
          <td>{{ $peticao->created_at }}</td>
          <td>
            <a href="{{ route('peticoes.editar',$peticao->codPeticao) }}">Editar</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('peticoes.novo') }}">Adicionar</a>
@endsection
