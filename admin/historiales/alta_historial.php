<?php include '../extend/header.php';
$id = $con ->real_escape_string(htmlentities($_GET['id']));
$nombre = $con->real_escape_string(htmlentities($_GET['nombre']));
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Alta de Historial Médico de: <?php echo $nombre ?></span>
        <form class="form" action ="ins_historiales.php" method ="post" autocomplete=off>
          <div>
            <input type="hidden" name="id_mascota" value="<?php echo $id  ?>">
            <input type="hidden" name="nombre_mascota" value="<?php echo $nombre ?>">
          </div>
          <select class="" name="servicio"  onblur="may (this.value, this.id)">
              <option value="" disabled selected>Servicio:</option>
              <?php $sel_servicio = $con->prepare("SELECT servicio, id FROM servicios");
              $sel_servicio->execute();
              $res_servicio = $sel_servicio->get_result();
              while ($f_servicio = $res_servicio->fetch_assoc()){?>
              <option value="<?php echo $f_servicio['servicio'] ?>"><?php echo $f_servicio['servicio'] ?></option>
              <?php }
              $sel_servicio->close();
              ?>
          </select>
          <div class="input-field">
            <input type="date" class="datepicker" name="fecha_ing" id="fecha_ing" required  >
            <label for="fecha_ing">Fecha de ingreso:</label>
          </div>
          <div class="input-field">
            <input type="date" class="datepicker" name="fecha_eg" id="fecha_eg" required >
            <label for="fecha_eg">Fecha de egreso:</label>
          </div>
          <div class="input-field">
            <input type="text" name="observaciones" id="observaciones" >
            <label for="observaciones">Observaciones:</label>
          </div>
          <div class="input-field">
            <input type="text" name="medicamento" id="medicamento"  onblur="may (this.value, this.id)">
            <label for="medicamento">Medicamento:</label>
          </div>
          <button type="submit" class="btn">Guardar</button>
        </form>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php';?>
</body>
</html>
