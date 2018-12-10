@extends('layout.site')
@section('titulo','Consultar Bases')

@section('conteudo')

 <div class="conteudoForm">
    <h2 class="center" style="margin-bottom: 2%">Lista de Bases</h2>
   <div id="busca"> 
    <a href="{{ route('bases.novo') }}">
            <img width="10%" style="margin-top: -6%;" src="{{ url('images/add-01.png') }}">
         </a>
    <div class="search">
      <form>
         <input  type="search" id="BuscaPet" placeholder="Nome da base">
      </form>
    </div>
  </div>


    <table class="consulta" >
    	<thead>
    		<tr>
          		<th>Rótulo</th>
    			<th>Descrição</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($bases as $base)
    		<tr>
    			<td style="width: 22%">{{$base->rotulo}}</td>
                <td style="text-align: justify; padding-right: 2%">{{$base->texto}}</td>
    			<td style="width: 12%;margin-left: 1%">
              <a href="{{ route('bases.editar',$base->codBase)}}">
                  <img width="24%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('bases.visualizar', $base->codBase) }}">
                  <img width="27%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="javascript:void(0)">
                  <img class="toDelete" width="20%" src="{{ url('images/delet.png') }}">
              </a>
          </td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>

    </div>


@endsection

@section('javascript')
    <script>
        var deletebuttons = $(".toDelete");
        for(var i = 0, len = deletebuttons.length; i<len; i++){
            deletebuttons[i].onclick = clickCB;
        }

        function clickCB(el){
            var codBase = $(this).parent().parent().parent().children().first().text();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $.extend({
                confirm: function(message, title) {
                    $("<div></div>").dialog({
                        // Remove the closing 'X' from the dialog
                        open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); },
                        width: 500,
                        buttons: [{
                            text: "Sim",
                            click: function () {
                                $.ajax({
                                    type: "DELETE",
                                    url: "/api/bases/excluir/" + codBase,
                                    context: this,
                                    success: function(){
                                        window.location.replace("{{ route('bases.listar') }}");
                                    },
                                    error: function(error){
                                        console.log(error);
                                    }
                                });
                                $(this).dialog("close");
                            }
                        },
                            {
                            text: "Nao",
                            click: function() {
                                $(this).dialog("close");
                            }
                        }],
                        close: function(event, ui) { $(this).remove(); },
                        resizable: false,
                        title: title,
                        modal: true
                    }).text(message);
                }
            });

            $.confirm("Tem certeza que quer excluir esta base?", //message
                "Confirmar" //title
            );
        }
    </script>
@endsection
