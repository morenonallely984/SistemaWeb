<?php include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$del = $con->query("DELETE FROM historiales WHERE id='$id' ");

if ($del) {
  header('location:../extend/alerta.php?msj=Historial eliminado&c=cli&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=El historial no pudo ser eliminado&c=cli&p=in&t=error');
}

$con->close();
?>
