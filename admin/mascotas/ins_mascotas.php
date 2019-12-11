<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = htmlentities($_POST['nombre']);
$id_cliente = htmlentities($_POST['id_cliente']);
$nombre_cliente = htmlentities($_POST['nombre_cliente']);
$edad = htmlentities($_POST['edad']);
$raza = htmlentities($_POST['raza']);
$especie = htmlentities($_POST['especie']);
$sexo = htmlentities($_POST['sexo']);
$peso = htmlentities($_POST['peso']);
$color = htmlentities($_POST['color']);
$id = '';


$ins = $con->prepare("INSERT INTO mascotas VALUES(?,?,?,?,?,?,?,?,?,?) ");
$ins->bind_param("isisssssss", $id, $nombre, $id_cliente, $nombre_cliente, $edad, $raza, $especie, $sexo, $peso, $color);

if ($ins->execute()) {
  header('location:../extend/alerta.php?msj=Mascota registrada registrador&c=cli&p=in&t=success');
}else {
  header('location:../extend/alerta.php?msj=La mascota no pudo ser registrada&c=cli&p=in&t=error');
}

$ins->close();
$con->close();
}else {
  header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
}
 ?>
