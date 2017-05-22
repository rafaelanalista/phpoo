<?php

require_once 'db.php';


class crud extends usuario{
	
	public function insert(){
		$sql = "insert into arquivos(imagem, data, title, chamada, link) values(:nome, NOW(), :title, :chamada_blog, :link)";
		$stmt = db::Prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':title', $this->title);
		$stmt->bindParam(':chamada_blog', $this->chamada_blog);
		$stmt->bindParam(':link', $this->link);
		return $stmt->execute();
	}

	
	
	public function personalizado(){
		$sql= 'select * from arquivos where title like litle :title';
		$stmt = db::Prepare($sql);
		$stmt ->bindValue(':nome',$termo.'%');
		
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	
	
	
	
	public function findAll(){
		$sql= "select * from arquivos";
		$stmt = db::Prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function deletar($id){
	$sql = "delete from arquivos where id=:id";
	$stmt=db::prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	return $stmt->execute();

	}
		
		
	



	
	
	}
					
					
					
				
					
					?>