<?php include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$del = $con->query("DELETE FROM mascotas WHERE id='$id' ");

if ($del) {
  header('location:../extend/alerta.php?msj=Mascota eliminada&c=cli&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=La mascota no pudo ser eliminada&c=cli&p=in&t=error');
}

$con->close();
?>
