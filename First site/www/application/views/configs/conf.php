<?php
	require_once('C:/WebServers/home/hwwpv3.ru/www/tools/Smarty-3.1.21/libs/Smarty.class.php');
	class smartyConnector extends Smarty{
		function __construct() {
			parent::__construct();
			
			$this->template_dir = '/home/hwwpv3.ru/www/application/views/templates';
			$this->compile_dir = '/home/hwwpv3.ru/www/application/views/templates_c/';
			$this->config_dir = '/home/hwwpv3.ru/www/application/views/configs/';
			$this->cache_dir = '/home/hwwpv3.ru/www/application/views/cache/';
		}		
	}
?>