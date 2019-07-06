function validar(campo, alerta, label) {

  //console.log("Validar: " + campo);

  //input[name='valorX']
  //#idDoCampo
  //var n = parseFloat( $(campo).val() );

  //if ( $(campo).val().length == 0 || isNaN(n)) {
  if ( $(campo).val().length == 0) {

    // Erro
    // Exibir alerta
    $(alerta).slideDown();

    // Adiciona erro ao label
    $(label).addClass("text-danger");
    // No input
    $(campo).addClass("is-invalid");

    $(campo).val("");
    $(campo).focus();
    return false;

  }

  // Tudo correto

  // Oculta alerta
  $(alerta).hide();
  // Remove classes
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  // Adiciona classe ao input
  $(campo).addClass("is-valid");

  return true;

}
var i = 1;
var j=0;
var larg = [];
var comp = [];
var temp = [];
$(document).ready(function(){

  $("#cadastrar").click(function(){

    if ( validar( "input[name='largada']", "#alerta0", "#labelv0" )
      && validar( "input[name='competidor']", "#alerta1", "#labelv1" )
      && validar( "input[name='tempo']", "#alerta2", "#labelv2" ) ) {

        var largada = parseFloat( $("input[name='largada']").val() );
        var competidor = $("input[name='competidor']").val();
        var tempo = parseFloat( $("input[name='tempo']").val() );


        $('#tabelalargada tr:last').after('<tr id = '+i+'><td id = l'+i+'>'+largada+'</td><td id = c'+i+'>'+competidor+'</td><td id = t'+i+'>'+tempo+'</td></tr>');

       //   console.log($("#tabelalargada tr:last").val($(this).parent().find("td")[0].innerHTML));

        larg.push(largada);
        console.log("largada: " + larg);
        comp.push(competidor);
        temp.push(tempo);


        //for (var j=larg.length; j > 0; j--) {
          $('#tabelaordenada tr:last').after('<tr id = '+i+'><td>'+i+'</td><td>'+larg.pop(i)+'</td><td>'+comp.pop(i)+'</td><td>'+temp.pop(i)+'</td><td>--</td></tr>');
         // }

        $("#tabelalargada").show();
        $("#classificacao").show();
        $("#tabelaordenada").show();

        //console.log("largada: " + largada);
        //console.log("competidor: " + competidor);
        //console.log("tempo: " + tempo);

        i=i+1;
      } else {
        $("input[name='resultado']").val("");
      }

  });

});
