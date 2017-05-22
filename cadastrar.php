<?php
//require_once 'classes/Usuarios.php';
function __autoload($class) {
require_once 'classes/' . $class . '.php';
}
?>
<html>
	<head>
		<meta charset="utf-8">

		<title>Inicio</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<script src="js/jquery.validate.js"></script>
		<script src="js/bootstrap.js"></script>
	
	</head>
	<body>
	
	    	<?php include("topo.php"); ?>	
	<div class="container" style="margin-top:100px;">
    
			   
	   
	   
			   
		<div class="col-md-6" style="margin-top:30px;">
					
			<form action="loaded.php" method="post" enctype="multipart/form-data" name="formUpload" id="formulario">
				<h3 class="page-header">Cadastrar Notícia</h3>
				<h5>Digite o título.</h5>
				<input type="text" name="titulo" style="width:450px;" required>	
				<h5>Digite o texto de chamada.</h5>
				<textarea class="required form-control" name="chamada" rows="3" style="width:450px;" required></textarea>
				<h5>Digite o link.</h5>
				<input type="text" name="link" style="width:450px;" required>
				<br />
				<br />	
				<input type="file" name="arquivo"/ required>
				<br />
				<input type="submit" class="btn btn-primary" name="btnEnviar" value="Enviar" /></div>	
			</form>
		</div>		
	</div>