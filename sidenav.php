<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilossidenav">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>

    <title>SideNav</title>
  </head>
  <body>

    <nav class="grey lighten-5">
      <a href="" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
    </nav>
        <ul id="menu" class="side-nav fixed ">
            <li>
                <div class="userView  light-green ">
                    <div>
                        <img src="img/doc.jpg" class="circle center-align" alt="">
                    </div>
                        <a href="#" class="white-text">MVZ. Jesús Efrén Meraz Lopez</a>
                        <br>
                </div>
            </li>
        <div class="">
          <li class="bold active"><a href="about.html" class="waves-effect waves-teal"><i class="material-icons">home</i>Inicio</a></li>
          <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal"><i class="material-icons">person_add</i>Registro de Clientes</a></li>
          <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal"><i class="material-icons">pets</i>Registro de Mascotas</a></li>
          <li class="bold"><a href="about.html" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Historial Médico</a></li>
          <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal"><i class="material-icons">colorize</i>Vacunas</a></li>
        </div>
      </ul>


<script>
  $('.button-collapse').sideNav();
</script>

  </body>
</html>
