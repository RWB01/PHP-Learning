<?php

class Plugin3 implements Pluging_Interface
{
    public static function get_content() 
	{
	    return '<h3 class="myHeader">Пикачу, долбани Плагином 3!</h3>';
	}
	public static function get_position() {
		return "Center-Left";
	}
}

?>