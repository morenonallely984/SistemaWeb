<?php include '../extend/header.php';
$id = $con ->real_escape_string(htmlentities($_GET['id']));
$nombre = $con->real_escape_string(htmlentities($_GET['nombre']));
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Alta de mascota de: <?php echo $nombre ?></span>
        <form class="form" action ="ins_mascotas.php" method ="post" autocomplete=off>
          <div>
            <input type="hidden" name="id_cliente" value="<?php echo $id ?>">
            <input type="hidden" name="nombre_cliente" value="<?php echo $nombre ?>">
          </div>
          <div class="input-field">
            <input type="text" name="nombre" required autofocus title="DEBE DE CONTENER SOLO LETRAS" pattern="[A-Z/s ]+" id="nombre" onblur="may(this.value, this.id)">
            <label for="nombre">Nombre:</label >
          </div>
          <div class="input-field">
            <input type="text" name="edad" id="edad" onblur="may (this.value, this.id)">
            <label for="edad">Edad:</label>
          </div>
          <div class="input-field">
            <input type="text" name="raza" id="raza" required autofocus title="DEBE DE CONTENER SOLO LETRAS" pattern="[A-Z/s ]+" onblur="may (this.value, this.id)">
            <label for="raza">Raza:</label>
          </div>
          <div class="input-field">
            <input type="text" name="especie" id="especie" required autofocus title="DEBE DE CONTENER SOLO LETRAS" pattern="[A-Z/s ]+"  onblur="may (this.value, this.id)">
            <label for="especie">Especie:</label>
          </div>
          <select name="sexo" required>
            <option value="" disabled selected>Sexo:</option>
            <option value="M">M</option>
            <option value="H">H</option>
          </select>
          <div class="input-field">
            <input type="text" name="peso" id="peso"  onblur="may (this.value, this.id)">
            <label for="peso">Peso:</label>
          </div>
          <div class="input-field">
            <input type="text" name="color" id="color" required autofocus title="DEBE DE CONTENER SOLO LETRAS" pattern="[A-Z/s ]+"  onblur="may (this.value, this.id)">
            <label for="color">Color:</label>
          </div>

          <button type="submit" class="btn">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>





<?php include '../extend/scripts.php';?>
</body>
</html>
