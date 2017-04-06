<?php

include "../bd/conexion.php";

$db = new Conexion();

$query   = "SELECT p.id,p.nombres,p.apellidos,p.domicilio,p.email,p.telefono,a.descripcion from personal as p INNER JOIN area as a ON 
p.area_idarea=a.idarea";
$result  = $db->query($query);
?>

<?php if($result->num_rows>0):?>
<div class="table-responsive">
<table id="consulta"  class="table table-bordered table-hover table-condensed">
<thead>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Email</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Área</th>
	<th>Acciones</th>
</thead>
<?php while ($fila = mysqli_fetch_array($result)):?>
<tr>
	<td><?php echo $fila["nombres"]; ?></td>
	<td><?php echo $fila["apellidos"]; ?></td>
	<td><?php echo $fila["domicilio"]; ?></td>
	<td><?php echo $fila["email"]; ?></td>
	<td><?php echo $fila["telefono"]; ?></td>
	<td><?php echo $fila["descripcion"]; ?></td>
	<td style="width:150px;">
		<a data-id="<?php echo $fila["id"];?>" class="btn btn-edit btn-sm btn-warning">Editar</a>
		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $fila['id']?>">Eliminar</button>
		</td>
	</td>
</tr>
<?php endwhile;?>
</table>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
  <!-- Modal -->
  <script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("modal/actualizar.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#editModal').modal('show');
  	});
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Actualizar</h4>
        </div>
        <div class="modal-body">
        <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




   <script>
 $(document).ready(function(){
    $('#consulta').DataTable();
});
 </script>