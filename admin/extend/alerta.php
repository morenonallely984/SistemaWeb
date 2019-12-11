<?php
include '../conexion/conexion.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
    <title>Clínica Veterinaria Dr. Pet-Paw</title>
</head>
<?php
$mensaje = htmlentities($_GET['msj']);
$c = htmlentities($_GET['c']);
$p = htmlentities($_GET['p']);
$t = htmlentities($_GET['t']);

switch ($c) {
  case 'us':
    $carpeta = '../usuarios/';
    break;
  case 'home':
    $carpeta = '../inicio/';
    break;
  case 'salir':
    $carpeta = '../';
    break;
  case 'pe':
    $carpeta = '../perfil/';
    break;
  case 'cli':
    $carpeta = '../clientes/';
    break;
  case 'mas':
    $carpeta = '../mascotas/';
    break;
  case 'his':
    $carpeta = '../historiales/';
    break;
}

switch ($p) {
  case 'in':
    $pagina = 'index.php';
    break;
  case 'home':
    $pagina = 'index.php';
    break;
  case 'salir':
    $pagina = '';
    break;
  case 'perfil':
    $pagina = 'perfil.php';
    break;  


}

$dir= $carpeta.$pagina;
if ($t == "error") {
  $titulo = "Oppppss..";
}else{
  $titulo = "Buen trabajo";
}
 ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
<script>
swal({
  title: '<?php echo $titulo ?>',
  text: "<?php echo $mensaje ?>",
  type: '<?php echo $t ?>',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok'
}).then((result) => {
location.href='<?php echo $dir ?>';
});

$(document).click(function(){
  location.href='<?php echo $dir ?>';
});

$(document).keyup(function(){
if (e.which == 27) {
  location.href='<?php echo $dir ?>';
}
});
</script>
</body>
