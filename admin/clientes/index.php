<?php include '../extend/header.php';
?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content" >
        <span class="card-title">Alta de clientes</span>
        <form class="form" action ="ins_clientes.php" method ="post" autocomplete=off>
          <div class="input-field">
            <input type="text" name="nombre" required autofocus title="DEBE DE CONTENER SOLO LETRAS" pattern="[A-Z/s ]+" id="nombre" onblur="may(this.value, this.id)">
            <label for="nombre">Nombre:</label >
          </div>
          <select name="sexo" required>
            <option value="" disabled selected>Selecciona tu sexo</option>
            <option value="F">F</option>
            <option value="M">M</option>
          </select>
          <div class="input-field">
            <input type="text" name="direccion" id="direccion" onblur="may (this.value, this.id)">
            <label for="direccion">Dirección:</label>
          </div>
          <div class="input-field">
            <input type="text" name="telefono" required autofocus title="DEBE DE CONTENER SOLO NUMEROS" pattern="[0-9]{10}" id="telefono">
            <label for="telefono">Télefono:</label>
          </div>
          <div class="input-field">
            <input type="email" name="email" id="email">
            <label for="email">Correo:</label>
          </div>
          <button type="submit" class="btn">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

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

<?php $sel = $con->query("SELECT * FROM clientes ");
$row = mysqli_num_rows($sel);
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Clientes (<?php echo $row ?>) </span>
        <table>
          <thead>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Direccion</th>
            <th>Télefono</th>
            <th>Correo</th>
            <th>Mascota</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <th></th>
            <th></th>
          </thead>
          <?php while($f = $sel->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $f['nombre'] ?></td>
              <td><?php echo $f['sexo'] ?></td>
              <td><?php echo $f['direccion'] ?></td>
              <td><?php echo $f['telefono'] ?></td>
              <td><?php echo $f['correo'] ?></td>
              <td><a href="../mascotas/alta_mascotas.php?id=<?php echo $f['id'] ?>&nombre=<?php echo $f['nombre'] ?>" class="btn-floating green"><i class="material-icons">pets</td>
              <td><a href="editar_cliente.php?id=<?php echo $f['id'] ?>" class="btn-floating blue"><i class="material-icons">loop</td>
              <td>
                <a href="#" class="btn-floating red darken-4" onclick="swal({ title: 'Esta seguro que desea eliminar al cliente?'
                , text: 'Al eliminarlo no podra recuperarlo!', type: 'warning', showCancelButton: true,
                confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarlo!'
                }).then(function () {
                location.href='eliminar_clientes.php?id=<?php echo $f['id'] ?>'; })">
               <i class="material-icons">delete_forever</i></a>
              </td>
              <td></td>
              <td></td>
            </tr>
            <?php } ?>

<?php include '../extend/scripts.php';?>

</body >
</html >
