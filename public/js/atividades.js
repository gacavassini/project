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

  console.log(dataOficial);
  console.log(prazo);
  console.log(dias);
}

function calculaCorrido(){
	//declaração das variaveis
	var dataDiarioOficial = $("#datepicker").val();
	var qtdeDias = $("input[name=prazo]").val();
	var dataLimite = $("input[name=dataLimite]");
	var dataLimiteObj = new Date();

	//tratamento da data, metodos date precisam estar nesse formato mm-dd-yyyy
	var arrData = dataDiarioOficial.split('/');
	var stringFormatada = arrData[1] + '-' + arrData[0] + '-' + arrData[2];
	var dataOficialObj = new Date(stringFormatada);

	//adiciona qtde de dias a dataOficial
	dataOficialObj.setDate(dataOficialObj.getDate() + parseInt(qtdeDias));
	if(dataOficialObj.getDay() == 0){
		alert(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear() + " caiu num domingo");
		dataOficialObj.setDate(dataOficialObj.getDate() - 2);
	}
	if(dataOficialObj.getDay() == 6){
		alert(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear() + " caiu num sabado");
		dataOficialObj.setDate(dataOficialObj.getDate() - 1);
	}

	//verifica se é feriado
	if(verificaSeFeriado(dataOficialObj)){
		dataOficialObj.setDate(dataOficialObj.getDate() - 1);
	}

	//seta o valor da data limite com o valor calculado
	dataLimite.val(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear());
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
		var dataStr = dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear();
		var adicionado = false;

		while(adicionado == false){
			if(dataOficialObj.getDay() == 6){
				console.log(dataStr + "é um sábado, adicionando mais um dia");
				dataOficialObj.setDate(dataOficialObj.getDate() + 1);
			}
			else if(dataOficialObj.getDay() == 0){
				console.log(dataStr + "é um domingo, adicionando mais um dia");
				dataOficialObj.setDate(dataOficialObj.getDate() + 1);
			}
			else if(verificaSeFeriado(dataOficialObj)){
				console.log(dataStr + "é um feriado, adicionando mais um dia");
				dataOficialObj.setDate(dataOficialObj.getDate() + 1);
			}
			else{
				adicionado = true;
			}
		}


		/*var dataStr;
		dataOficialObj.setDate(dataOficialObj.getDate() + 1);
		dataStr = dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear();
		if(dataOficialObj.getDay() == 6){
			console.log(dataStr + "é um sábado");
		}else if(dataOficialObj.getDay() == 0){}*/
	}
	//seta o valor da data limite com o valor calculado
	dataLimite.val(dataOficialObj.getDate() + "/" + (dataOficialObj.getMonth() + 1) + "/" + dataOficialObj.getFullYear());b
}

function verificaSeFeriado(data){
	var url = "https://api.calendario.com.br/?json=true&ano=2018&estado=SP&cidade=MOGI_GUACU&token=ZGdvLmRpZWdvY2FydmFsaG9AZ21haWwuY29tJmhhc2g9MTYzMjcxMDY3";
	var dataString = data.getDate() + "/" + (data.getMonth() + 1) + "/" + data.getFullYear();
	var feriado = $.getJSON(url, function(feriados){
		var toReturn = false;
		for(var i = 0; i < feriados.length; i++){
			if(feriados[i].date == dataString){
				toReturn = true;
				break;
			}
		}
		//retorna valor do toReturn para a variavel feriado
		return toReturn
	});
	//retorna o valor de feriado para quem chamou a função
	return feriado;
}
