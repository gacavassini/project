@extends('layout.site')
@section('titulo','Consultar Bases')

@section('conteudo')

 <div class="conteudoForm">
    <h3 class="center">Lista de Bases</h3>
    <div class="search">
    	<form>
			<input type="search" placeholder="Nome da Base"> <a class="btnSave" style="width: 27%" href="{{route('bases.novo')}}">Nova</a>
		</form>
    </div>


    <table class="consulta">
    	<thead>
    		<tr>
          		<th>ID</th>
    			<th>Rótulo</th>
    			<th>Ação</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($bases as $base)
    		<tr>
    			<td>{{$base->codBase}}</td>
                <td>{{$base->rotulo}}</td>
    			<td>
              <a href="{{ route('bases.editar',$base->codBase)}}">
                  <img width="4%" src="{{ url('images/edit-01.png') }}">
              </a>
              <a href="{{ route('bases.visualizar', $base->codBase) }}">
                  <img width="6%" src="{{ url('images/see-01.png') }}">
              </a>
              <a href="javascript:void(0)">
                  <img class="toDelete" width="3%" src="{{ url('images/delet.png') }}">
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
