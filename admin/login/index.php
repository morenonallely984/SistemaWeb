<?php
include '../conexion/conexion.php';
//Preguntamos si e metodo es el post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$user = $con->real_escape_string(htmlentities($_POST['usuario'])); //escapamos variables para que no tengan sqlinjection
$pass = $con->real_escape_string(htmlentities($_POST['contra'])); //escapamos variables para que no tengan sqlinjection

$candado = ' '; //En caso de que aun pueda ser vulnerable agregamos otra seguridad (espacio) al tener espacio cualquiera de los 2 se trunca
$str_u = strpos($user,$candado); //busca cracteres
$str_p = strpos($pass,$candado);

if (is_int($str_u)) { //preugnta si es entero
  $user = ''; //Vacia variable en caso de tener algo malicioso
}else {
  $usuario = $user;
}
if (is_int($str_p)) {
  $pass = '';
}else{
  $pass2 = sha1($pass); //Compara encriptacion
}

//Segundo nivel de seguridad

if ($user == null && $pass == null) {
  header('location:../extend/alerta.php?msj=El formato no es correcto&c=salir&p=salir&t=error');
}else{
  $sel = $con->query("SELECT nick, nombre, nivel, correo, foto, pass FROM usuarios WHERE nick = '$usuario' AND pass = '$pass2' AND bloqueo =1 ");
  $row = mysqli_num_rows($sel);
  if ($row == 1) {
      if($var = $sel->fetch_assoc() ){
      $nick = $var['nick'];
      $contra = $var['pass'];
      $nivel = $var['nivel'];
      $correo = $var['correo'];
      $foto = $var['foto'];
      $nombre = $var['nombre'];
    }
//en caso de no tener nivel requerido se sale
    if ($nick == $usuario && $contra == $pass2 && $nivel == 'ADMINISTRADOR'){
      $_SESSION['nick'] = $nick;
      $_SESSION['nombre'] = $nombre;
      $_SESSION['nivel'] = $nivel;
      $_SESSION['correo'] = $correo;
      $_SESSION['foto'] = $foto;
      header('location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
    }
    elseif ($nick == $usuario && $contra == $pass2 && $nivel == 'ASESOR'){
      $_SESSION['nick'] = $nick;
      $_SESSION['nombre'] = $nombre;
      $_SESSION['nivel'] = $nivel;
      $_SESSION['correo'] = $correo;
      $_SESSION['foto'] = $foto;
      header('location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
    }else {
      header('location:../extend/alerta.php?msj=No tienes permiso para acceder&c=salir&p=salir&t=error');
    }

    }else {
      header('location:../extend/alerta.php?msj=Nombre de usuario o contraseña incorrecto&c=salir&p=salir&t=error');
    }

}

}else {
  header('location:../extend/alerta.php?msj=Utiliza el formulario&c=salir&p=salir&t=error');
}
 ?>
