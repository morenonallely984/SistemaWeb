<?php
if ($_SESSION['nivel'] != 'ADMINISTRADOR') {
  // se bloquea si no es ADMINISTRADOR
  header("location:bloqueo.php");
} ?>
