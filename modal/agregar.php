  <!-- Modal -->
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="nombres" required="">
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" name="apellidos" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" name="domicilio" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="phone">Telefono</label>
    <input type="text" class="form-control" name="telefono" >
  </div>

  <div class="form-group">
    <label for="phone">Área</label>
    <select name="area" id="" class="form-control">
    <option value=""> [ Seleccionar ]</option>
    <?php 
    $db  = new Conexion();
    $query  = "SELECT * FROM area";
    $result = $db->query($query);
    while ($fila = mysqli_fetch_object($result)) 
    {
      echo "<option value='".$fila->idarea."'>".$fila->descripcion."</option>";
    }

     ?>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->