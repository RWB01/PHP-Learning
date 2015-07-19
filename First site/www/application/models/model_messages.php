<?php
include 'db_singleton.php';
class messages {
	public $id = null;
	public $text;
	public $from;
	public $to;
	
    public function __construct($id=null) {
		if ($id) { 
			$DB_instanse =  SQL_Connector::getInstance();
		    #$result = $DB_instanse->doQuerry('SELECT * FROM messages WHERE id=' . $id);
			//присвоить значения класса данным таблиц
		}
	}
	
	public function getMessages($viewed=null){
		$DB_instanse =  SQL_Connector::getInstance();
		if($viwed==null){
			return $DB_instanse->doQuerry('Select * from messages');
		}else{
		    return $DB_instanse->doQuerry('Select * from messages where viwed='.$viewed);
	    }
		
	}
	
	public function sendMessage($to, $message) {
		$DB_instanse =  SQL_Connector::getInstance();
		$to = intval($to);
		$query = "INSERT INTO `messages` (`message`, `to`, `from`, `viwed`) VALUES ('$message', '$to', '0', '0')";
		$DB_instanse->doUpdareOrInsert($query);
	}
	
	public function getUserMessages($user_id){
		$DB_instanse =  SQL_Connector::getInstance();
		return $DB_instanse->doQuerry('Select * from messages where to_name="'.$user_id.'"');
	}
	
	public function setViwed(){
	
	}
	
	public function save(){
	}
	public function get_data(){
		return $this->getMessages();
	}
}
?>