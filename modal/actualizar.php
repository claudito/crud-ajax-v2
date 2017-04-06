<?php
include "../bd/conexion.php";

$db = new Conexion();

$id     = $_GET['id'];
$query  = "SELECT p.id,p.nombres,p.apellidos,p.domicilio,p.email,p.telefono,a.descripcion,a.idarea from personal as p INNER JOIN area as a ON 
p.area_idarea=a.idarea WHERE p.id='".$id."'";
$result = $db->query($query);
$existe = mysqli_num_rows($result);
$dato   = mysqli_fetch_array($result);
?>

<?php if($existe > 0):?>

<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $dato['nombres']; ?>" name="nombres" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $dato['apellidos']; ?>" name="apellidos" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" value="<?php echo $dato['domicilio']; ?>" name="domicilio" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $dato['email']; ?>" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $dato['telefono']; ?>" name="telefono" >
  </div>

  <div class="form-group">
  <label>Área</label>
  <select name="area" id="" class="form-control">
  <option value="<?php echo $dato['idarea']; ?>"><?php echo $dato['descripcion']; ?></option>
  <?php 
   
  $query  = "SELECT * FROM area WHERE idarea <> '".$dato['idarea']."' ";
  $result = $db->query($query);
  while ($fila = mysqli_fetch_object($result)) 
  {
     echo "<option value='".$fila->idarea."'>".$fila->descripcion."</option>";
  }


   ?>
  </select>
  </div>
<input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>



<script>

    $("#actualizar").submit(function(e){
    e.preventDefault();
    var parametros = $(this).serialize();
     $.ajax({
          type: "POST",
          url: "procesos/actualizar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
         //$("#actualizar")[0].reset();  //resetear inputs
          $('#editModal').modal('hide'); //ocultar modal
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
          loadTabla(1);
          }
      });
  });


</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>