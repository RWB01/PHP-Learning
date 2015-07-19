<?php

class SQL_Connector
{
    protected static $_instance;
	private static $_connect;

	private function __construct($servername = "localhost", $username = "root",
        	$password = "", $dbname = "dbm")
	{	    
		
		try {
			self::$_connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			self::$_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	
    private function __clone(){
    }

    public static function getInstance() {
        if (null === self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	
	public function doUpdareOrInsert($Query) {
		$stmt = self::$_connect->prepare($Query);
		$stmt->execute();
	}
	
	public function doQuerry($Query){
		$stmt = self::$_connect->prepare($Query);
		$stmt->execute();

		$result = $stmt->fetchAll();
				
		return $result;
	}
}
//SQL_Connector::getInstance()->doQuerry('SELECT * FROM messages');
