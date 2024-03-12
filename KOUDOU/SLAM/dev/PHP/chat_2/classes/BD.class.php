<?php
class BD{
	private static $conn;
	
	private function __construct(){}
	
	public static function getConn(){
		if(is_null(self::$conn)){
			self::$conn = new PDO(DSN, USER, PASS);
		}
		return self::$conn;
	}
}
?>

	
	