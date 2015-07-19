<?php

class Controller_Interesting extends Controller
{
	
	function action_index()
	{
		$this->view->generate('interesting_view.php', 'template_view.php');
	}

}
?>