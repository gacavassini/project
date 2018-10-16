//confirma o cliente e trava os campos referentes a ele
function disableCliente(){
  $('#clienteSelect').prop('disabled', true);
}

//isso roda quando cliente eh alterado
$('#clienteSelect').change(function(){
  if($('#clienteSelect').val() == ""){
    $('#entrevistaSelect').empty();
    $('#entrevistas').hide();
  }else{
    $.getJSON('/api/entrevistas/' + $('#clienteSelect').val(), function(data){
      $('#entrevistaSelect').empty();
      $('#entrevistaSelect').append('<option value=""></option>');
      for(var i = 0; i < data.length; i++){
        opcao = '<option value="' + data[i].codEntrevista + '">' +
          data[i].created_at + '</option>';
        $('#entrevistaSelect').append(opcao);
      }
    });
    $('#entrevistas').show();
  }
});

//isso roda quando base eh alterada
$('#baseSelect').change(function(){
  if($('#baseSelect').val() == ""){
    $('#enderecamentoSelect').empty();
    $('#enderecamentoSelect').val("");
    $('#baseSelect').val("");
    $('#enderecamento').hide();
  }
  else{
    $.getJSON('/api/bases/rotulo/' + $('#baseSelect').val(), function(data){
      $('#enderecamentoSelect').empty();
      bases = data;
      if(data.length > 1){
        $('#enderecamentoSelect').append('<option value=""></option>');
        for(var i = 0; i < data.length; i++){
          opcao = '<option value="' + data[i].codBase + '">' +
            data[i].texto + '</option>';
          $('#enderecamentoSelect').append(opcao);
          $('#enderecamento label').text("Selecionar " + $('#baseSelect option:selected').text());
        }
        $('#enderecamento').show();
      }
      else{
        $('#enderecamentoSelect').empty();
        $('#enderecamento').hide();
      }
    });
  }
});

//funcao para qnd clicar no botao inserir de bases
$('.insereBase').click(function(){
  //checa se o valor da base estah vazio
  if($('#baseSelect').val() == ""){
    alert("Selecione uma Base");
  }
  else{
    var base = $('#baseSelect').val();
    var enderecamento = $('#enderecamentoSelect option:selected');
    var editor = $('iframe').contents().find("body");
    var newBase;

    //checa se tem outra combo
    if($('#enderecamentoSelect').children().length > 0){
      if($('#enderecamentoSelect').val() == ""){
        alert("Selecione um Endereçamento");
      }
      else{
        editor.append("<p>" + enderecamento.text() + "</p>");
        criarPeticaoBase($('#enderecamentoSelect option:selected').val());

        $('#enderecamentoSelect').val("");
        $('#baseSelect').val("");
        $('#enderecamentoSelect').empty();
        $('#enderecamento').hide();
      }
    }
    else{
      $.getJSON('/api/bases/' + $('#baseSelect').val(), function(data){
        editor.append("<p>" + data.texto + "</p>");
        criarPeticaoBase(data.codBase);

        $('#enderecamentoSelect').val("");
        $('#baseSelect').val("");
        $('#enderecamentoSelect').empty();
        $('#enderecamento').hide();
      });
    }
  }
});

//funcao pra adicionar pedidos
$('.inserePedido').click(function(){
  var codPedido;
  var editor = $('iframe').contents().find("body");
  $('input:checked').each(function(){
    $.getJSON('/api/pedidos/' + $(this).val(), function(data){
      editor.append("<p>" + data.resumo + "</p>");
      criarPeticaoPedido(data.codPedido);
    });
  });
});

//esse metodo cria os inputs e valores para a tabela de peticoes_bases
function criarPeticaoBase(codBase){
  var peticoesBases = $('#peticoesBases');
  var indexBase = peticoesBases.children().length;
  var novaBase = '<div id="_' + indexBase + '"> <input type="text" name="petBaseCodBase" value="' + codBase + '" disabled /> </div>';

  peticoesBases.append(novaBase);
}

function criarPeticaoPedido(codPedido){
  var peticoesPedidos = $('#peticoesPedidos');
  var indexPedido = peticoesPedidos.children().length;
  var novoPedido = '<div id="_' + indexPedido + '"> <input type="text" name="petPedCodPedido" value="' + codPedido + '" disabled /> </div>';

  peticoesPedidos.append(novoPedido);
}
