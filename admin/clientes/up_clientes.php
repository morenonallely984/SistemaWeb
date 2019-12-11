<?php include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = htmlentities($_POST['nombre']);
  $direccion = htmlentities($_POST['direccion']);
  $telefono = htmlentities($_POST['telefono']);
  $correo = htmlentities($_POST['email']);
  $id = htmlentities($_POST['id']);

  $up = $con->prepare("UPDATE clientes SET nombre=?, direccion=?, telefono=?, correo=? WHERE id=? ");
  $up->bind_param('ssssi', $nombre, $direccion, $telefono, $correo, $id);
  if ($up->execute()) {
    header('location:../extend/alerta.php?msj=Cliente actualizado&c=cli&p=in&t=success');
  }else{
    header('location:../extend/alerta.php?msj=Cliente no actualizado&c=cli&p=in&t=error');
  }

  $up->close();
  $con->close();
  }else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=cli&p=in&t=error');
  }
 ?>
