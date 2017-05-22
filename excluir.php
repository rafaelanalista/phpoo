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


		<?php 
			$aluno = new crud();
			if(isset($_POST["excluir"])){
				$id = $_POST['numero'];
				$aluno->deletar($id);
			}
		?>	

		<?php include("topo.php"); ?>	
		<div class="container" style="margin-top:100px;">
			<div class="panel panel-primary">
				<div class="panel-heading"><b>EXCLUSÃO DE NOTÍCIAS</b></div>
				<table class="table table-striped table-bordered table-hover"> 
					<thead>
						<tr>
							<th>id</th>
							<th>título</th>
							<th>chamada</th>
							<th>excluir</th>
						</tr>
					</thead>

					<?php foreach($aluno->findAll() as $key => $value){?>
						<tr>
							<td><?php echo $value->id;?></td>
							<td><?php echo $value->title;?></td>
							<td><?php echo $value->chamada;?></td>
							<td>
								<form action="" method="post">
									<input type="hidden" value="<?php echo $value->id ?>" name="numero">
									<button type="submit" class="label label-danger" name="excluir">excluir</button>
								</form>
							</td>
						</tr>
					<?php	} ?>
				</table>
			</div>
		</div>
	</body>
</html>
