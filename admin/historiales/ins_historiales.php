<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id_mascota = htmlentities($_POST['id_mascota']);
$nombre_mascota = htmlentities($_POST['nombre_mascota']);
$fecha_ing = htmlentities($_POST['fecha_ing']);
$fecha_eg = htmlentities($_POST['fecha_eg']);
$servicio = htmlentities($_POST['servicio']);
$observaciones = htmlentities($_POST['observaciones']);
$medicamento = htmlentities($_POST['medicamento']);

$id = ''; //id del historial


$ins = $con->prepare("INSERT INTO historiales VALUES(?,?,?,?,?,?,?,?)");
$ins->bind_param("iissssss", $id, $id_mascota, $nombre_mascota, $fecha_ing, $fecha_eg, $servicio, $observaciones, $medicamento);

if ($ins->execute()) {
  header('location:../extend/alerta.php?msj=Historial medico registrado&c=his&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=El Historial medico no puso ser registrado&c=his&p=in&t=error');
}

$ins->close();
$con->close();
}else {
  header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
}
 ?>
