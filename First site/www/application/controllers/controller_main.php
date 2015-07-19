<?php

class Controller_Main extends Controller
{
	
	function action_index()
	{
		$date = date('d m');
		if ($date == '31 12') {
			$context = new Context(new newYearGreeting());
		} else {
			$context = new Context(new notNewYearGreeting());
		}
		$greetings = $context->execute();
		$oneOfTheData = array($greetings, 'greetings');
		$data = array();
		array_push($data, $oneOfTheData);
		
		$this->view->generate('main.tpl', $data);
	}
}
?>