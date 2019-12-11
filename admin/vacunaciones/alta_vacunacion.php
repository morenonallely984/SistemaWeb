<?php include '../extend/header.php';
$id = $con ->real_escape_string(htmlentities($_GET['id']));
$nombre = $con->real_escape_string(htmlentities($_GET['nombre']));
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Alta de Vacunación de: <?php echo $nombre ?></span>
        <br>
        <form class="form" action ="ins_vacunacion.php" method ="post" autocomplete=off>
          <div>
            <input type="hidden" name="id_mascota" value="<?php echo $id ?>">
            <input type="hidden" name="nombre_mascota" value="<?php echo $nombre ?>">
          </div>
          <div class="row">
            <div class="col s6">
              <select id="tipo" name="tipo" required="">
                <option value=""disabled selected>Seleccione el tipo de vacuna:</option>
                <?php $sel_tipo = $con->prepare("SELECT * FROM tipo_vacunas");
                $sel_tipo->execute();
                $res_tipo = $sel_tipo->get_result();
                while ($f_tipo = $res_tipo->fetch_assoc()){?>
                <option value="<?php echo $f_tipo['id'] ?>"><?php echo $f_tipo['tipo'] ?></option>
                <?php }
                $sel_tipo->close();
                ?>
              </select>
            </div>
            <div class="col s6">
              <div class="res_tipo"></div>
            </div>
          </div>
          <div class="input-field">
            <input type="date" class="datepicker" name="fecha_vac" id="fecha_vac" required >
            <label for="fecha_vac">Fecha de registro</label>
          </div>
          <button type="submit" class="btn">Guardar</button>
        </form>
    </div>
  </div>
</div>
<?php include '../extend/scripts.php';?>
<script src="../js/tipo_vacunas.js"></script>
</body>
</html>
