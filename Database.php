<?php 

/**
* Base de donnée #Singleton
*/
class Database
{
	private static $bdd = null;
	
	/**
	* Retourne une instance de PDO #factory
	*/
	public static function getBDD($db_name='dbnightcode', $db_host='localhost', $db_user='root', $db_pass='root'){

		if(self::$bdd === null){
			self::$bdd = new PDO('mysql:dbname='. $db_name .';host='. $db_host, $db_user, $db_pass);
			self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return self::$bdd;
	}
} 

?>