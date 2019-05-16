function validar(campo, alerta, label){

  var n = parseFloat( $(campo).val() );

  if($(campo).val().length == 0 || isNaN(n)){
    $(alerta).slideDown();
    $(label).addClass("text-danger");
    $(campo).addClass("is-invalid");
    $(campo).val();
    $(campo).focus();
      return false;
  }
  $(alerta).hide()
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  $(campo).addClass("is-valid")
    return true;
}


$(document).ready(function(){
  $("#calculo").click(function(){
    if( validar("input[name='valor1']","#alerta1","#labelv1") && validar("input[name='valor2']","#alerta2","#labelv2")){

      var n1 = parseFloat( $("input[name='valor1']").val() );
      var n2 = parseFloat( $("input[name='valor2']").val() );

      $("input[name='resultado']").val(n1+n2);
    } else {
      $("input[name='resultado']").val("");
    }
  });
});