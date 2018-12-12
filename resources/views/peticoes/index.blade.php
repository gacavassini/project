@extends('layout.site')
@section('titulo','Lista de Petições')
@section('conteudo')

<div class="conteudoForm">
    <h2 class="center" style="margin-bottom: 2%">Lista de Petições<br></h2>

    <div id="busca">
        <a href="{{ route('peticoes.novo') }}">
            <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
        </a>
        <div class="search">
            <form>
                <input  type="search" id="BuscaPet" placeholder="Nome do cliente">
            </form>
        </div>
    </div>

    <table class="consulta" id="tpeq">
        <br>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Data de Criação</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peticoes as $peticao)
                <tr class="rows">
                    <td style="width: 50%">{{ $peticao->entrevista->cliente->nome }}</td>
                    <td>{{ $peticao->created_at }}</td>
                    <td style="width: 17%">
                        <a href="{{ route('peticoes.editar',$peticao->codPeticao)}}">
                            <img width="16%" src="{{ url('images/edit-01.png') }}">
                        </a>
                        <a href="">
                            <img width="20%" src="{{ url('images/see-01.png') }}">
                        </a>
                        <a href="{{ route('peticoes.visualizarDocumento', $peticao->codPeticao) }}" target="_blank">
                            <img width="18%" src="{{ url('images/pdf.png') }}">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
    $("tr.rows").each(function(){
        var row = $(this);
        var arrData = row.find("td").eq(1).text().split(" ");
        var arrData2 = arrData[0].split("-");
        var strFormat = arrData2[2] + "/" + arrData2[1] + "/" + arrData2[0];
        row.find("td").eq(1).text(strFormat);
    });
</script>
@endsection
