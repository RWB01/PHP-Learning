<?php

class Plugin2 implements Pluging_Interface
{
    public static function get_content() 
	{
	    return '<h3 class="myHeader">������, ������ 2, ������� ������!</h3>';
	}
	public static function get_position() {
		return "Center-Right";
	}
}

?>