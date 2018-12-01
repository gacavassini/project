//isso aqui eh na tela de lembrete
function mudaOsLabelsEmLembrete(){
    var date = new Date();
    var diaSemana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];

    var dia = (date.getDate() < 10) ? "0"+date.getDate() : date.getDate();
    $("#today").text(dia + "/" + (date.getMonth() + 1) + "/" + date.getFullYear() + " - " + diaSemana[date.getDay()]);

    date.setDate(date.getDate() + 1);
    var dia = (date.getDate() < 10) ? "0"+date.getDate() : date.getDate();
    $("#tomorrow").text(dia + "/" + (date.getMonth() + 1) + "/" + date.getFullYear() + " - " + diaSemana[date.getDay()]);

    date.setDate(date.getDate() + 1);
    var dia = (date.getDate() < 10) ? "0"+date.getDate() : date.getDate();
    $("#afterTomorrow").text(dia + "/" + (date.getMonth() + 1) + "/" + date.getFullYear() + " - " + diaSemana[date.getDay()]);
}

//no change do prazo
$("input[name=prazo]").change(function(){
  if($("input[name=dataDiarioOficial]").val() != ""){
    if($("input[name=dias]:checked").val() != ""){
      calculaDataLimite();
    }
  }
});

//no change do data oficial
$("input[name=dataDiarioOficial]").change(function(){
  if($("input[name=prazo]").val() != ""){
    if($("input[name=dias]:checked").val() != ""){
      calculaDataLimite();
    }
  }
});

//no change do dias
$("input[name=dias]").change(function(){
  if($("input[name=prazo]").val() != ""){
    if($("input[name=dias]:checked").val() != ""){
      calculaDataLimite();
    }
  }
});

function calculaDataLimite(){
  var dataOficial = new Date($("input[name=dataDiarioOficial]").val());
  var prazo = $("input[name=prazo]").val();
  var dias = $("input[name=dias]:checked").val();

  if(dias == "0"){
      calculaCorrido();
  }
  if(dias == "1"){
      calculaUtil();
  }
}

function calculaCorrido(){
	//declaração das variaveis
	var dataDiarioOficial = $("#datepicker").val();
	var qtdeDias = parseInt($("input[name=prazo]").val());
	var dataLimite = $("input[name=dataLimite]");
	var dataLimiteObj = new Date();

	//tratamento da data, metodos date precisam estar nesse formato mm-dd-yyyy
	var arrData = dataDiarioOficial.split('/');
	var stringFormatada = arrData[1] + '-' + arrData[0] + '-' + arrData[2];
	var dataOficialObj = new Date(stringFormatada);
    dataOficialObj.setDate(dataOficialObj.getDate() + qtdeDias);

	//adiciona qtde de dias a dataOficial
	if(dataOficialObj.getDay() == 0){
		alert(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear() + " caiu num domingo");
		dataOficialObj.setDate(dataOficialObj.getDate() - 2);
	}
	if(dataOficialObj.getDay() == 6){
		alert(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear() + " caiu num sabado");
		dataOficialObj.setDate(dataOficialObj.getDate() - 1);
	}

    //TODO consertar funcao q verifica se eh feriado
	//verifica se é feriado
	if(verificaFeriado(dataOficialObj)){
        alert(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear() + " caiu num feriado");
		dataOficialObj.setDate(dataOficialObj.getDate() - 1);
	}

	//seta o valor da data limite com o valor calculado
    var dia = (dataOficialObj.getDate() < 10) ? "0"+dataOficialObj.getDate() : dataOficialObj.getDate();
	dataLimite.val(dia + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear());
}

function calculaUtil(){
	//declaração das variaveis
	var dataDiarioOficial = $("#datepicker").val();
	var qtdeDias = $("input[name=prazo]").val();
	var dataLimite = $("input[name=dataLimite]");
	var dataLimiteObj = new Date();
	//tratamento da data, metodos date precisam estar nesse formato mm-dd-yyyy
	var arrData = dataDiarioOficial.split('/');
	var stringFormatada = arrData[1] + '-' + arrData[0] + '-' + arrData[2];
	var dataOficialObj = new Date(stringFormatada);

	for(var i = 1; i <= parseInt(qtdeDias); i++){
		dataOficialObj.setDate(dataOficialObj.getDate() + 1);
        var dia = (dataOficialObj.getDate() < 10) ? "0"+dataOficialObj.getDate() : dataOficialObj.getDate();
    	var dataStr = dia + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear();
		var adicionado = false;

        if(dataOficialObj.getDay() == 6){
            console.log(dataStr + "é um sábado, adicionando mais um dia");
            //dataOficialObj.setDate(dataOficialObj.getDate() + 1);
            i -= 1;
        }
        else if(dataOficialObj.getDay() == 0){
            console.log(dataStr + "é um domingo, adicionando mais um dia");
            //dataOficialObj.setDate(dataOficialObj.getDate() + 1);
            i -= 1;
        }
        else if(verificaFeriado(dataOficialObj)){
            console.log(dataStr + "é um feriado, adicionando mais um dia");
            //dataOficialObj.setDate(dataOficialObj.getDate() + 1);
            i -= 1;
        }
	}
	//seta o valor da data limite com o valor calculado
	dataLimite.val(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear());
}

function verificaFeriado(data){
	var dia = (data.getDate() < 10) ? "0"+data.getDate() : data.getDate();
	var dataString = dia + "/" + (data.getMonth() + 1) + "/" + data.getFullYear();
	if($(".feriado:contains("+dataString+")").text() == dataString){
		return true;
	}
	else{
		return false;
	}
}
