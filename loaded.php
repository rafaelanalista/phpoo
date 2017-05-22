<?php
//require_once 'classes/Usuarios.php';
function __autoload($class) {
require_once 'classes/' . $class . '.php';
}
?>
<?php

	if(isset($_POST['btnEnviar'])){
		$nome = $_FILES['arquivo']['name'];
		$title = $_POST["titulo"];
		$chamada_blog = $_POST["chamada"];
		$link = $_POST["link"];
   
		$formato = $_FILES['arquivo']['type'];
		$nome = strtolower($nome);
		$formatos = array("image/jpg","image/png","image/gif","image/jpeg","image/bmp"); 
		$testeType = array_search($formato, $formatos);
		if(!$testeType){
			echo "<script type='text/javascript'>alert('formato invalido!')</script>";
			header('Location: principal.php');
			}else{
				if(file_exists("arquivos/$nome")){
				$a = 1;
				while(file_exists("arquivos/[$a]$nome")){
				$a++;
		}			
		$nome = "[".$a."]".$nome;	
	}
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], "arquivos/".$nome)){
		$cadastro = new crud();
		$cadastro->setNome($nome);
		$cadastro->setChamada_blog($chamada_blog);
		$cadastro->setTitle($title);
		$cadastro->setLink($link);
		if($cadastro->insert()){
			header('Location: cadastrar.php');
			echo "<script>alert('cadastrado com sucesso');</script>";
			

		}else{
			echo "<script type='text/javascript'>alert('upload nao realizado ')</script>";
			unlink("arquivos/$nome");
		}
	}}
	}
	?>
