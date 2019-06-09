function validar(campo, alerta, label) {

  console.log("Validar: " + campo);

  //input[name='valorX']
  //#idDoCampo
  var n = parseFloat( $(campo).val() );

  if ( $(campo).val().length == 0 || isNaN(n)) {

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

$(document).ready(function(){

  $("#calculoescala").click(function(){

    if ( validar( "input[name='amplitude']", "#alerta1", "#labelv1" )
      && validar( "input[name='tempo']", "#alerta2", "#labelv2" ) ) {

        var amplitude1 = parseFloat( $("input[name='amplitude']").val() );
        var tempo2 = parseFloat( $("input[name='tempo']").val() );

        var m = ( (Math.log10(amplitude1)) + (3*Math.log10(8*tempo2)) - 2.92).toFixed(2);


        $("input[name='resultado']").val(m);

         $("#resultado").show();
         $("#tabelaer").show();

         if (m < 3.5) {
                  $("#1").show();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();
          }
          if (m >= 3.5 && m <=5.4) {
                  $("#1").hide();
                  $("#2").show();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();        }
          if (m >= 5.5 && m <=6.0) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").show();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();
              }
          if (m >=6.1 && m <=6.9) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").show();
                  $("#5").hide();
                  $("#6").hide();
              }
          if (m >= 7.0 && m <=7.9) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").show();
                  $("#6").hide();
              }
          if (m >=8.0) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").show();
              }

      } else {
        $("input[name='resultado']").val("");
      }

  });

});
