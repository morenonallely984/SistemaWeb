<?php include '../extend/header.php';
?>
<br>
<div class="row">
  <div class="col s12">
    <nav class="grey lighten-2" >
      <div class="nav-wrapper">
        <div class="input-field">
          <input type="search"   id="buscar" autocomplete="off"  >
          <label for="buscar"><i class="material-icons" >search</i></label>
          <i class="material-icons" >close</i>
        </div>
      </div>
    </nav>
  </div>
</div>
<?php $sel = $con->query("SELECT * FROM vacunacion ");
$row = mysqli_num_rows($sel);
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Vacunaciones (<?php echo $row ?>) </span>
        <table>
          <thead>
            <th>Nombre de la mascota</th>
            <th>Vacuna</th>
            <th>Fecha de vacunación</th>
            <th>Eliminar</th>
            <th></th>
          </thead>
          <?php while($f = $sel->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $f['nombre_mascota'] ?></td>
              <td><?php echo $f['vacuna'] ?></td>
              <td><?php echo $f['fecha_vac'] ?></td>
              <td>
                <a href="#" class="btn-floating red darken-4" onclick="swal({ title: 'Esta seguro que desea eliminar al cliente?'
                , text: 'Al eliminarlo no podra recuperarlo!', type: 'warning', showCancelButton: true,
                confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarlo!'
                }).then(function () {
                location.href='eliminar_vacunacion.php?id=<?php echo $f['id'] ?>'; })">
               <i class="material-icons">delete_forever</i></a>
              </td>
              <td></td>
              <td></td>
            </tr>
            <?php } ?>
<?php include '../extend/scripts.php';?>
</body>
</html>
