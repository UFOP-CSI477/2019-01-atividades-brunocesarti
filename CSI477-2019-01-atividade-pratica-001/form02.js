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

  $("#calculoimc").click(function(){

    if ( validar( "input[name='peso']", "#alerta1", "#labelv1" )
      && validar( "input[name='altura']", "#alerta2", "#labelv2" ) ) {

        var peso1 = parseFloat( $("input[name='peso']").val() );
        var altura2 = parseFloat( $("input[name='altura']").val() );

        var imc = (peso1/(Math.pow(altura2, 2))).toFixed(1);

        var pesomin =(18.1*(Math.pow(altura2, 2))).toFixed(2);
        var pesomax =(24.9*(Math.pow(altura2, 2))).toFixed(2);

        $("input[name='resultado']").val(imc);
        $("input[name='pesomin']").val(pesomin);
        $("input[name='pesomax']").val(pesomax);

         $("#resultado").show();
         $("#pesoentre").show();
         $("#tabelaimc").show();

         if (imc < 18.1) {
                  $("#1").show();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();
          }
          if (imc >= 18.1 && imc <=24.9) {
                  $("#1").hide();
                  $("#2").show();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();        }
          if (imc >= 25.0 && imc <=29.9) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").show();
                  $("#4").hide();
                  $("#5").hide();
                  $("#6").hide();
              }
          if (imc >=30.0 && imc <=34.9) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").show();
                  $("#5").hide();
                  $("#6").hide();
              }
          if (imc >= 35.0 && imc <=39.9) {
                  $("#1").hide();
                  $("#2").hide();
                  $("#3").hide();
                  $("#4").hide();
                  $("#5").show();
                  $("#6").hide();
              }
          if (imc > 40) {
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
