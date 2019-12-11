<?php include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = htmlentities($_POST['nombre']);
  $edad = htmlentities($_POST['edad']);
  $raza = htmlentities($_POST['raza']);
  $especie = htmlentities($_POST['especie']);
  $sexo = htmlentities($_POST['sexo']);
  $color = htmlentities($_POST['color']);
  $id = htmlentities($_POST['id']);

  $up = $con->prepare("UPDATE mascotas SET nombre=?, edad=?, raza=?, especie=?, sexo=?, color=? WHERE id=? ");
  $up->bind_param('ssssssi', $nombre, $edad, $raza, $especie, $sexo, $color, $id);
  if ($up->execute()) {
    header('location:../extend/alerta.php?msj=Mascota actualizada&c=cli&p=in&t=success');
  }else{
    header('location:../extend/alerta.php?msj=Mascota  no actualizada&c=cli&p=in&t=error');
  }

  $up->close();
  $con->close();
  }else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }
 ?>
