<?php include('bd/conexion.php'); ?>
<html>
	<head>
	     <meta charset="UTF-8">
		<title>.: REGISTRO DE PERSONAL :.</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Datatables -->
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

<script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">

	</head>
	<body>
 <?php 
 include('modal/agregar.php'); 
 include('modal/eliminar.php');
 ?>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<h1>REGISTRO DE PERSONAL</h1><hr>

<div class="form-group">
<a data-toggle="modal" href="#newModal" class="btn btn-primary">Agregar Registro</a>
</div>




<div id="loader" class="text-center"> <img src="img/loader.gif"></div>
<div id="mensaje"></div><!-- Datos ajax Final -->
<div id="tabla"></div><!-- Datos ajax Final -->


</div>
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/app/person.js"></script>
<script> loadTabla(1); </script>

</body>
</html>