<?php
//require_once 'classes/Usuarios.php';
function __autoload($class) {
require_once 'classes/' . $class . '.php';
}
?>
<?php $usuario = new crud();?>
<?php
try{
?>
<?php $pdo = new PDO('mysql:host=localhost;dbname=upload','root', 'vertrigo');?>
<?php $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}catch(PDOException $e){
echo $e->getMessage();

}
?>
<?php

if(isset($_POST['bus'])){
$var1 = $_POST['txtbusca'];


$query = "SELECT * FROM arquivos WHERE title LIKE :search";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':search', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->execute();


if ($stmt->rowCount() > 0) { 
$result = $stmt->fetchAll();

foreach( $result as $row ) {
echo $row["id"];
echo $row["title"];
}
} else {
echo 'There is nothing to show';
}

}



//echo $result->title;
//echo $result->imagem;


?>






<html>
	<head>
		<meta charset="utf-8">

		<title>Inicio</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/font-awesome.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src=""></script>
	</head>
	<body>

	<?php //include("topo.php"); ?>


	<div class="container" style="margin-top:100px;">

	
	<form action="" method="post">
	
	buscar<input type="text" name="txtbusca">
	<input type="submit" value="buscar" name="bus">
	
	
	
	
	</form>
	
	
	
	
	
		<div class="row">
			<article class="col-md-8">
		
				
				<?php foreach($usuario->findAll() as $key => $value){?>
					<div style="width:400px;">
						
						
						<?php echo $value->imagem;?><br />
						<h2><?php echo $value->title;?></h2><br>
						
						<?php echo $value->chamada;?><br /><br>
						

						
				</div>
				<br>
				<?php } ?>
	
</article>
</div>
</div>




