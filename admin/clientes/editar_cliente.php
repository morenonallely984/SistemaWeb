<?php include '../extend/header.php';
$id = htmlentities($_GET['id']);

$sel = $con->prepare("SELECT id, nombre, sexo, direccion, telefono, correo FROM clientes WHERE id = ?");
$sel -> bind_param('i', $id);
$sel -> execute();
$sel -> bind_result($id, $nombre, $sexo, $direccion, $telefono, $correo);

if ($sel -> fetch()) {
  // code...
}
?>

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Editar cliente</span>
        <form class="form" action ="up_clientes.php" method ="post" autocomplete=off>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="input-field">
            <input type="text" name="nombre" value="<?php echo $nombre?>" required autofocus title="Solo letras" id="nombre" onblur="may(this.value, this.id)">
            <label for="nombre">Nombre:</label >
          </div>
          <div class="input-field">
            <input type="text" name="direccion" value="<?php echo $direccion?>" id="direccion" onblur="may (this.value, this.id)">
            <label for="direccion">Dirección:</label>
          </div>
          <div class="input-field">
            <input type="text" name="telefono" value="<?php echo $telefono?>" id="telefono">
            <label for="telefono">Télefono:</label>
          </div>
          <div class="input-field">
            <input type="email" name="email" id="email" value="<?php echo $correo?>">
            <label for="email">Correo:</label>
          </div>
          <button type="submit" class="btn">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
$sel->close();
$con->close();
include '../extend/scripts.php'; ?>

</body>
</html>
