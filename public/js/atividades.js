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
}
