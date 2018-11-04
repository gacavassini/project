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
    $('#clienteSelect').prop("disabled", true);
    var cliente = $('#clienteSelect').val();
    //esse ajax filtra as entrevistas pelo codigo do cliente
    $.getJSON('/api/entrevistas/' + cliente, function(data){
      $('#entrevistaSelect').empty();
      $('#entrevistaSelect').append('<option value=""></option>');
      for(var i = 0; i < data.length; i++){
        opcao = '<option value="' + data[i].codEntrevista + '">' +
          data[i].created_at + '</option>';
        $('#entrevistaSelect').append(opcao);
      }
    });

    $('#entrevistas').show();

    setClienteValues(cliente);
  }
});

$("#entrevistaSelect").change(function(){
  var entrevista = $("#entrevistaSelect").val();
  $('#entrevistaSelect').prop("disabled", true)
  if(entrevista != ""){
    setEmpresaValues(entrevista);
    setEntrevistaValues(entrevista);
    var entrevistaInput = '<input name="codEntrevista" id="codEntrevistaInput" value="' + entrevista + '" type="hidden" />';
    $('#entrevistaSelect').parent().append(entrevistaInput);
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

    //checa se tem outra combo
    if($('#enderecamentoSelect').children().length > 0){
      if($('#enderecamentoSelect').val() == ""){
        alert("Selecione um Endereçamento");
      }
      else{
        //essa linha adiciona o texto na posicao do cursor
        CKEDITOR.instances.editor.insertHtml("<p>" + enderecamento.text() + "<p/>");
        criarPeticaoBase($('#enderecamentoSelect option:selected').val());

        $('#enderecamentoSelect').val("");
        $('#baseSelect').val("");
        $('#enderecamentoSelect').empty();
        $('#enderecamento').hide();
      }
    }
    else{
      $.getJSON('/api/bases/' + $('#baseSelect').val(), function(data){
        //essa linha adiciona o texto na posicao do cursor
        CKEDITOR.instances.editor.insertHtml("<p>" + data.texto + "<p/>");
        criarPeticaoBase(data.codBase);

        $('#enderecamentoSelect').val("");
        $('#baseSelect').val("");
        $('#enderecamentoSelect').empty();
        $('#enderecamento').hide();
      });
    }
  }
});

function insereBase(){
  var codBase;
  var texto;

  $.each([ 1,2,4,5,6,8,9,10 ], function( i, value ) {
    if(value == 1){
      $.getJSON('/api/bases/rotulo/' + value, function(data){
        codBase = data[0].codBase;
        texto = data[0].texto;
        CKEDITOR.instances.editor.insertHtml("<p>" + texto + "<p/>");
        criarPeticaoBase(codBase);
      });
    }
    else{
      $.getJSON('/api/bases/' + value, function(data){
        codBase = data.codBase;
        texto = data.texto;
        //cria div com id dos pedidos
        if(data.codRot == 9){
          var div = CKEDITOR.instances.editor.document.createElement('div');
          var divObject = "<div id='tituloPedido'>";
          divObject += "<p>" + texto + "</p>";
          divObject += "</div>";
          div.setHtml(divObject);
          CKEDITOR.instances.editor.insertElement(div);
        }
        //cria div com id do cliente
        else if(data.codRot == 2){
          var div = CKEDITOR.instances.editor.document.createElement('div');
          var divObject = "<div id='qualiCliente'>";
          divObject += "<p>" + texto + "</p>";
          divObject += "</div>";
          div.setHtml(divObject);
          CKEDITOR.instances.editor.insertElement(div);
        }
        //cria div com id da empresa
        else if(data.codRot == 4){
          var div = CKEDITOR.instances.editor.document.createElement('div');
          var divObject = "<div id='qualiReclamada'>";
          divObject += "<p>" + texto + "</p>";
          divObject += "</div>";
          div.setHtml(divObject);
          CKEDITOR.instances.editor.insertElement(div);
        }
        //cria div com id da entrevista
        else if(data.codRot == 6){
          var div = CKEDITOR.instances.editor.document.createElement('div');
          var divObject = "<div id='dadosContrato'>";
          divObject += "<p>" + texto + "</p>";
          divObject += "</div>";
          div.setHtml(divObject);
          CKEDITOR.instances.editor.insertElement(div);
        }
        else{
          CKEDITOR.instances.editor.insertHtml("<p>" + texto + "<p/>");
        }
        criarPeticaoBase(codBase);
      });
    }
  });
}

//funcao pra adicionar pedidos
$('.inserePedido').click(function(){
  var codPedido;
  var editor;
  var range;

  $('input:checked').each(function(){
    $.getJSON('/api/pedidos/' + $(this).val(), function(data){
      //essa linha adiciona o texto na posicao do cursor
      //se pedido for especifico
      if(data.tipo === 0){
        editor = CKEDITOR.instances.editor;
        range = editor.createRange();
        range.setStart(editor.document.getById( 'dadosContrato' ), CKEDITOR.POSITION_AFTER_START);
        // insere fundamento e resumo no meio do texto
        editor.editable().insertElement( CKEDITOR.dom.element.createFromHtml("<p>" + data.fundamento + "<p/>"), range );
        editor.editable().insertElement( CKEDITOR.dom.element.createFromHtml("<p>" + data.resumo + "<p/>"), range );

        //insere soh o resumo apos o titulo dos pedidos
        editor = CKEDITOR.instances.editor;
        range = editor.createRange();
        range.setStart(editor.document.getById( 'tituloPedido' ), CKEDITOR.POSITION_AFTER_START);
        editor.editable().insertElement( CKEDITOR.dom.element.createFromHtml("<p>" + data.resumo + "<p/>"), range );
      }
      else{//se o pedido for padrao

      }
      criarPeticaoPedido(data.codPedido);
    });
  });
});

//esse metodo cria os inputs e valores para a tabela de peticoes_bases
function criarPeticaoBase(codBase){
  var peticoesBases = $('#peticoesBases');
  var indexBase = peticoesBases.children().length;
  var novaBase = '<div id="_' + indexBase + '"> <input name="peticoesbases.'+indexBase+'" value="' + codBase + '" type="hidden" /> </div>';

  peticoesBases.append(novaBase);
}

function criarPeticaoPedido(codPedido){
  var peticoesPedidos = $('#peticoesPedidos');
  var indexPedido = peticoesPedidos.children().length;
  var novoPedido = '<div id="_' + indexPedido + '"> <input name="peticoespedidos.'+indexPedido+'" value="' + codPedido + '" type="hidden" /> </div>';

  peticoesPedidos.append(novoPedido);
}

function setClienteValues(codcliente){
  var editor = CKEDITOR.instances.editor;

  $.getJSON('/api/clientes/' + codcliente, function(cliente){
    var nome = cliente.nome;
    var estadcivil = cliente.estadoCivil;
    var profissao = cliente.profissao;
    var cpf = cliente.cpf;
    var rg = cliente.rg;
    var endereco = cliente.rua + ", nº" + cliente.numEndereco + ", " + cliente.cidade + "/SP";

    $(editor.editable().$).find("#qualiCliente p").text(function(){
      return $(this).text().replace("nomeCliente", nome).replace("estadoCivilCliente", estadcivil).replace("profissãoCliente", profissao).replace("cpfCliente", cpf).replace("rgCliente", rg).replace("enderecoCliente", endereco);
    });

  });
}

function setEmpresaValues(codEntrevista){
  var editor = CKEDITOR.instances.editor;

  $.getJSON('/api/empresas/' + codEntrevista, function(empresa){
    var nome = empresa.nome;
    var cnpj = empresa.cnpj;
    var endereco = empresa.rua + ", nº" + empresa.numEndereco + ", " + empresa.cidade + "/SP";

    $(editor.editable().$).find("#qualiReclamada p").text(function(){
      return $(this).text().replace("nomeEmpresa", nome).replace("cnpjEmpresa", cnpj).replace("enderecoEmpresa", endereco);
    });
  });
}

function setEntrevistaValues(codEntrevista){
  var editor = CKEDITOR.instances.editor;

  $.getJSON('/api/entrevistas/questoes/' + codEntrevista, function(questoes){
    for(var i = 0; i < questoes.length; i++){
      if(questoes[i].descQuestao == "Data de Admissão"){
        $(editor.editable().$).find("#dadosContrato p").text(function(){
          return $(this).text().replace("dataAdmissao", questoes[i].descResposta);
        });
      }

      if(questoes[i].descQuestao == "Data de Demissão"){
        $(editor.editable().$).find("#dadosContrato p").text(function(){
          return $(this).text().replace("dataDemissao", questoes[i].descResposta);
        });
      }

      if(questoes[i].descQuestao == "Qual era seu salário?"){
        $(editor.editable().$).find("#dadosContrato p").text(function(){
          return $(this).text().replace("salarioCliente", questoes[i].descResposta);
        });
      }

      if(questoes[i].descQuestao == "Jornada"){
        $(editor.editable().$).find("#dadosContrato p").text(function(){
          return $(this).text().replace("jornadaCliente", questoes[i].descResposta);
        });
      }

      if(questoes[i].descQuestao == "Para qual função foi contratado?"){
        $(editor.editable().$).find("#dadosContrato p").text(function(){
          return $(this).text().replace("funcaoCliente", questoes[i].descResposta);
        });
      }
    }
  });
}

/*
//pega o paragrafo do titulo dos pedidos
var editor = CKEDITOR.instances.editor;
editor.document.find('#tituloPedido p');

//pra achar os elementos lah dentro
$(editor.editable().$).find("")
*/
//=========================================================================================
// Having this HTML in editor:
// <p id="someId1">foo <em id="someId2">bar</em>.</p>

/*var range = editor.createRange();
range.setStart( editor.document.getById( 'someId1' ), 0 ); // <p>^foo
range.setEnd( editor.document.getById( 'someId2' ).getFirst(), 1 ); // <em>b^ar</em>

editor.getSelection().selectRanges( [ range ] );*/

// Will select:
// <p id="someId1">[foo <em id="someId2">b]ar</em>.</p>
