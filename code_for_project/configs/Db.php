<?php 
  class Database {

	public static $db;
	public static function connect () {
		if(!isset(self::$db)){
			try{
				
				self::$db = new PDO($config["database"]["host"], $config["database"]["username"],$config["database"]["password"]);
				self::$db -> exec('set names utf-8');
			}
			catch(PDOException $e)
			{
                 echo $e->getMessage();
			}
			
		}
		return self::$db;
	}
}

?>

