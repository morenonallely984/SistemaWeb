<?php include '../conexion/conexion.php';
$id_usuario = $con->real_escape_string(htmlentities($_GET['id_usuario']));

$del = $con->query("DELETE FROM usuarios WHERE id_usuario='$id_usuario' ");

if ($del) {
  header('location:../extend/alerta.php?msj=Usuario eliminado&c=us&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=El nivel de usuario no puedo ser eliminado&c=us&p=in&t=error');
}

$con->close();
?>
