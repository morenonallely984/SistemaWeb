<nav class="grey lighten-2">
  <a href="" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
</nav>
    <ul id="menu" class="side-nav fixed ">
        <li>
            <div class="userView blue-grey">
                <div>
                    <img src="../usuarios/<?php echo $_SESSION['foto'] ?>" class="circle center-align" alt="">
                </div>
                    <a href="../perfil/perfil.php" class="white-text"><?php echo $_SESSION['nombre'] ?></a>
                    <a href="" class="white-text"><?php echo $_SESSION['correo'] ?></a>
            </div>
        </li>
    <div class="">
      <li class="bold"><a href="../inicio" class="waves-effect waves-teal"><i class="material-icons">home</i>Inicio</a></li>
      <li class="bold"><a href="../usuarios" class="waves-effect waves-teal"><i class="material-icons">contacts</i>Registro de Usuarios</a></li>
      <li class="bold"><a href="../clientes" class="waves-effect waves-teal"><i class="material-icons">person_add</i>Registro de Clientes</a></li>
      <li class="bold"><a href="../mascotas" class="waves-effect waves-teal"><i class="material-icons">pets</i>Mascotas</a></li>
      <li class="bold"><a href="../historiales" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Historiales Médicos</a></li>
      <li class="bold"><a href="../vacunaciones" class="waves-effect waves-teal"><i class="material-icons">colorize</i>Vacunaciones</a></li>
      <li class="bold"><a href="../login/salir.php" class="waves-effect waves-teal"><i class="material-icons">power_settings_new</i>Salir</a></li>
    </div>
  </ul>
