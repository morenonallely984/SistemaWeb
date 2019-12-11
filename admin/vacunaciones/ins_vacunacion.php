<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$tipo = htmlentities($_POST['tipo']);
$vacuna = htmlentities($_POST['vacuna']);
$id_mascota = htmlentities($_POST['id_mascota']);
$nombre_mascota = htmlentities($_POST['nombre_mascota']);
$fecha_vac = htmlentities($_POST['fecha_vac']);

$id = ''; //id del historial

$ins = $con->prepare("INSERT INTO vacunacion VALUES(?,?,?,?,?,?)");
$ins->bind_param("ississ", $id, $tipo, $vacuna, $id_mascota, $nombre_mascota, $fecha_vac);

if ($ins->execute()){
  header('location:../extend/alerta.php?msj=Vacunacion registrada&c=his&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=La vacunacion no pudo ser registrada&c=his&p=in&t=error');
}

$ins->close();
$con->close();
}else {
  header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
}
 ?>
