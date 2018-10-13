/*$(function(){
  $('#conteudoMenuL').hide();
});

var todo;
var hash = window.location.hash;
if (hash !='')
{
	todo = $(hash).html(); // se for passado index.htm#noticia3 ela devolve #noticia3
	  $('.abas li a[href="' + hash + '"]').parent().addClass('ativo');
}
else {
	 todo = $('#conteudo div:first-child').html();
	 $('.abas li:first-child').addClass('ativo');

}

$('#todo').append('<div>' + todo + '</div>').find('div').slideDown();

$('.abas li a').click(function(){
  $('.abas li').removeClass('ativo');
  $(this).parent().addClass('ativo');
  var ancora = $(this).attr('href');
  var nome = ancora.substr(1, ancora.length);
  todo = $('#conteudoMenuL div[id="' + nome + '"]').html();
  $('#todo').empty();
  $('#todo').append('<div>' + todo + '</div>').find('div').slideDown();
  return false;
});*/

$(document).ready(function(){
  $('.abas li:first-child').addClass('ativo');
  $('#Pedidos').hide();
});

$('.abas li a').click(function(){
  $('.abas li').removeClass('ativo');
  $(this).parent().addClass('ativo');

  var nome = $(this).text();
  $('#Pedidos').hide();
  $('#Base').hide();
  $('#'+nome).show();
});
