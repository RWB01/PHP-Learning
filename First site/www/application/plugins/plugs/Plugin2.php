<?php

class Plugin2 implements Pluging_Interface
{
    public static function get_content() 
	{
	    return '<h3 class="myHeader">Визинг, Плагин 2, дымовая завеса!</h3>';
	}
	public static function get_position() {
		return "Center-Right";
	}
}

?>