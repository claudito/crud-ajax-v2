<?php

include('../bd/conexion.php');

$db = new Conexion();


$nombres   = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$domicilio = $_POST['domicilio'];
$email     = $_POST['email'];
$telefono  = $_POST['telefono'];
$area      = $_POST['area'];


$query = "INSERT INTO personal(nombres,apellidos,domicilio,email,telefono,area_idarea)
VALUES('".$nombres."','".$apellidos."','".$domicilio."','".$email."','".$telefono."','".$area."')";
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
	title: "Error al Regisrtrar",
	text: "Revise de porfavor.",
	type:"error",
	timer: 2000,
	showConfirmButton: false
	});
	</script>';
}


?>