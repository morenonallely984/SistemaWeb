<?php
include '../conexion/conexion.php';
if (!isset($_SESSION['nick'])) { //Si la variable de sesion no existe se sale
  header('location:inicio:../');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
    <link rel="stylesheet" href="../est/materialize.min.css">
    <title>Clínica Veterinaria Dr. Pet-Paw</title>

    <style media="screen">
    header, main, footer {
      padding-left: 300px;
    }
    .button-collapse{
      display: none;
    }
    body{
      text-transform: uppercase;
    }
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      .button-collapse{
        display: inherit;
      }
    }
    </style>
</head>
<body class="grey lighten-4">
  <main>

    <?php
    if ($_SESSION['nivel'] == 'ADMINISTRADOR') {
      include 'menu_admin.php';
    }else {
      include 'menu_asesor.php';
    }
   ?>
