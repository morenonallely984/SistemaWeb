</main>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script>

<!-- Filtrar buscador
$('#buscar').keyup(function(event){
  var contenido = new RegExp($(this).val(),'i');
  $('tr').hide();
  $('tr').filter(function(){
    return contenido.test($(this).text());
  }).show();
  $('.cabecera').attr('style','');
});

<!-- Filtar buscador -->
  $('.button-collapse').sideNav();
  $('select').material_select();
  $('.datepicker').pickadate({
    format: 'yyyy-m-d',
    selectMonths: true,
    selectYears: 15
  });

function may(obj, id){
  obj = obj.toUpperCase();
  document.getElementById(id).value = obj;
}
</script>
