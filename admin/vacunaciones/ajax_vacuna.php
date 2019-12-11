<?php
include '../conexion/conexion.php';
$tipo = htmlentities($_POST['tipo']);
 ?>
 <select id="vacuna" name="vacuna" required="">
   <option value=""disabled selected>Vacuna:</option>
   <?php $sel_vacuna = $con->prepare("SELECT * FROM vacunas WHERE id_tipo = ?");
   $sel_vacuna->bind_param('s',$tipo);
   $sel_vacuna->execute();
   $res_vacuna = $sel_vacuna->get_result();
   while ($f_vacuna = $res_vacuna->fetch_assoc()){?>
   <option value="<?php echo $f_vacuna['vacuna'] ?>"><?php echo $f_vacuna['vacuna'] ?></option>
   <?php }
   $sel_vacuna->close();
   ?>
 </select>
<script>
  $('select').material_select();
  </script>
