<?php
	class pluginsAdapter {
		private $allPlugins;
		function __construct(array $allPlugins) {
			$this->allPlugins = $allPlugins;
			//foreach($allPlugins as $value) echo $value;
		}
		
		function init_all_plugins($left, $right) {
			//$count = count($allPlugins);
			$leftPlugs = array();
			for ($i=0;$i<$left;$i++) {
				array_push ($leftPlugs, $this->allPlugins[$i]);
			}
			$rightPlugs = array();
			for ($i=$left;$i<($right+$left); $i++) {
				array_push ($rightPlugs, $this->allPlugins[$i]);
			}
			$result = array($leftPlugs, $rightPlugs);
			
			return $result;
		}
	}
?>