<?php

class Plugin1 implements Pluging_Interface
{
	
    public static function get_content() 
	{
	    return '<h3 class="myHeader">�����! ��������� ����� ������ 1!</h3>';
	}
	public static function get_position() {
		return "Center-Left";
	}
}

?>