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

<?php $sel = $con->query("SELECT * FROM mascotas ");
$row = mysqli_num_rows($sel);
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Mascotas (<?php echo $row ?>) </span>
        <table>
          <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Sexo</th>
            <th>Peso</th>
            <th>Propietario</th>
            <th>Historial</th>
            <th>Vacunación</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <th></th>
          </thead>
          <?php while($f = $sel->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $f['nombre'] ?></td>
              <td><?php echo $f['edad'] ?></td>
              <td><?php echo $f['especie'] ?></td>
              <td><?php echo $f['raza'] ?></td>
              <td><?php echo $f['sexo'] ?></td>
              <td><?php echo $f['peso'] ?></td>
              <td><?php echo $f['nombre_cliente'] ?></td>
              <td><a href="../historiales/alta_historial.php?id=<?php echo $f['id'] ?>&nombre=<?php echo $f['nombre'] ?>" class="btn-floating green"><i class="material-icons">add</td>
                <td><a href="../vacunaciones/alta_vacunacion.php?id=<?php echo $f['id'] ?>&nombre=<?php echo $f['nombre'] ?>" class="btn-floating green"><i class="material-icons">colorize</td>
              <td><a href="editar_mascota.php?id=<?php echo $f['id'] ?>" class="btn-floating blue"><i class="material-icons">loop</td>
              <td>
                <a href="#" class="btn-floating red darken-4" onclick="swal({ title: 'Esta seguro que desea eliminar a la mascota?'
                , text: 'Al eliminarla no podra recuperarla!', type: 'warning', showCancelButton: true,
                confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarla!'
                }).then(function () {
                location.href='eliminar_mascotas.php?id=<?php echo $f['id'] ?>'; })">
               <i class="material-icons">delete_forever</i></a>
              </td>
              <td></td>
              <td></td>
            </tr>
            <?php } ?>

<?php include '../extend/scripts.php';?>
</body>
</html>
