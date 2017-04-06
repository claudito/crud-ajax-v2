<?php

include('../bd/conexion.php');

$db = new Conexion();

$id        = $_POST['id'];
$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$domicilio = $_POST['domicilio'];
$email     = $_POST['email'];
$telefono  = $_POST['telefono'];
$area      = $_POST['area'];


$query = "UPDATE personal SET  nombres='".$nombres."',apellidos='".$apellidos."',domicilio='".$domicilio."',email='".$email."',telefono='".$telefono."',area_idarea='".$area."' WHERE id='".$id."'";
$result = $db->query($query);
if ($result) 
{
	echo '<script>
    swal({
    title: "Buen Trabajo",
    text: "Registro Actualizado",
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
	title: "Error al Actualizar",
	text: "Revise de porfavor.",
	type:"error",
	timer: 2000,
	showConfirmButton: false
	});
	</script>';
}


?>