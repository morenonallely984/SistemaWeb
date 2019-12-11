<?php include '../extend/header.php';
$id = htmlentities($_GET['id']);

$sel = $con->prepare("SELECT id, nombre, edad, raza, especie, sexo, color FROM mascotas WHERE id = ?");
$sel -> bind_param('i', $id);
$sel -> execute();
$sel -> bind_result($id, $nombre, $edad, $raza, $especie, $sexo, $color);

if ($sel -> fetch()) {
  // code...
}
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Editar mascota</span>
        <form class="form" action ="up_mascotas.php" method ="post" autocomplete=off>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <div class="input-field">
            <input type="text" name="nombre" value="<?php echo $nombre?>" required autofocus title="Solo letras" id="nombre" onblur="may(this.value, this.id)">
            <label for="nombre">Nombre:</label >
          </div>
          <div class="input-field">
            <input type="text" name="edad" value="<?php echo $edad?>" id="edad" onblur="may (this.value, this.id)">
            <label for="edad">Edad:</label>
          </div>
          <div class="input-field">
            <input type="text" name="raza" value="<?php echo $raza?>" id="raza">
            <label for="raza">Raza:</label>
          </div>
          <div class="input-field">
            <input type="text" name="especie" id="especie" value="<?php echo $especie?>">
            <label for="especie">Especie:</label>
          </div>
          <div class="input-field">
            <input type="text" name="sexo" id="sexo" value="<?php echo $sexo?>">
            <label for="sexo">Sexo:</label>
          </div>
          <div class="input-field">
            <input type="text" name="color" id="color" value="<?php echo $color?>">
            <label for="color">Color:</label>
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
