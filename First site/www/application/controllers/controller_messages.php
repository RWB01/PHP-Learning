<?php

class Controller_Messages extends Controller
{
	
	function action_index()
	{
		$data = new messages();
	
		if (isset($_POST['send'])) { 
			if ($_POST["id"]) {
				$data->sendMessage($_POST["id"], $_POST["message"]);
			}
		} 
		
		$messages = $data->getMessages();
		
		$data = array(array($messages, 'messages'));
	
		$this->view->generate('messages.tpl', $data);
	}

}
?>
