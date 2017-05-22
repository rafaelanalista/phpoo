<?php



class DB{

private static $instance;



public static function getInstance(){
	if(!isset(self::$instance)){
	
		try{
		
		self::$instance = new PDO('mysql:host=localhost;dbname=upload','root', 'vertrigo');
		
		self::$instance->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$instance->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		
		
		
		}catch(PDOException $e){
		echo $e->getMessage();
			
		}
	
	
	
	}

return self::$instance;
if (self::$instance){
echo "with sucess";

}


}

public static function Prepare($sql){
return DB::getInstance()->Prepare($sql);

}















}







?>


