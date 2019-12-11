<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = htmlentities($_POST['nombre']);
$sexo = htmlentities($_POST['sexo']);
$direccion = htmlentities($_POST['direccion']);
$telefono = htmlentities($_POST['telefono']);
$correo = htmlentities($_POST['email']);

$id = '';

$ins = $con->prepare("INSERT INTO clientes VALUES(?,?,?,?,?,?) ");
$ins->bind_param("isssss", $id, $nombre, $sexo, $direccion, $telefono, $correo);

if ($ins->execute()) {
  header('location:../extend/alerta.php?msj=Cliente registrador&c=cli&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=El cliente no pudo ser registrador&c=cli&p=in&t=error');
}

$ins->close();
$con->close();
}else {
  header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
}
 ?>
