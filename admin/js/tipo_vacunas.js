$('#tipo').change(function() {
  $.post('ajax_vacuna.php',{
    tipo:$('#tipo').val(),

    beforeSend: function(){
      $('.res_tipo').html("Espere un momento por favor...");
    }

  }, function(respuesta){
    $('.res_tipo').html(respuesta);
  });
});
