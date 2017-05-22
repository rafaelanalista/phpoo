<?php require_once("db.php");
?>


<?php

	 class usuario extends db{
	
	public $nome;
	public $chamada_blog;

	public $title;
	
	
	public $link;


	
	public function setNome($nome){
	$this->nome = $nome;
	
	}
	public function getNome(){
	return  $this->nome;
	
	}
	
	public function setChamada_blog($chamada_blog){
	$this->chamada_blog = $chamada_blog;
	
	}
	public function getChamada_blog(){
	return  $this->chamada_blog;
	
	}
	
	
	
	public function setTitle($title){
	$this->title = $title;
	
	}
	
	public function getTitle(){
	return $this->title;
	
	}
	
	
	public function setLink($link){
	$this->link = $link;
	
	}
	
	public function getLink(){
	return $this->link;
	
	
	
	}

}

?>