<?php

include('../bd/conexion.php');

$db = new Conexion();

$id        = $_POST['id'];

$query = "DELETE FROM  personal WHERE id='".$id."'";
$result = $db->query($query);
if ($result) 
{
	echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Eliminado",
    type:"success",
    timer: 2000,
    showConfirmButton: false
    });
     </script>';
} 
else 
{
	echo '<script>
	swal({
	title: "Error al Eliminar",
	text: "Revise de porfavor.",
	type:"error",
	timer: 2000,
	showConfirmButton: false
	});
	</script>';
}


?>