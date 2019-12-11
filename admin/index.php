<?php @session_start();
if (isset($_SESSION['nick'])) {
  header('location:inicio');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Hind|Muli|Oxygen:700|Poiret+One|Questrial|Quicksand:500|Raleway|Yanone+Kaffeesatz" rel="stylesheet">
    <link rel="stylesheet" href="est/est.css">

    <!-- Custom styles for this template -->

  </head>

  <body class="text-center p-3 mb-2 bg-light text-dark">
    <form class="form-signin" action="login/index.php" method="post" autocomplete="off">
      <div class="form-group shadow-lg p-3 mb-5 bg-white rounded">
      <img class="" src="img/doctor.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Inicio de Sesión</h1>
      <label for="usuario" class="sr-only">Usuario</label>
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre de usuario" required  autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name="contra" id="contra" class="form-control" placeholder="Contraseña" required pattern="[A-Za-z0-9]{8,15}">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar contraseña
        </label>

      </div>
      <button class="btn btn-lg btn btn-outline-success btn-block" type="submit">Acceder</button>
      <p class="mt-5 mb-3 text-muted">&copy;Clínica Veterinariaaaa Dr. Pet-Paw</p>
    </div>

      </div>
    </form>

  </body>
</html>
