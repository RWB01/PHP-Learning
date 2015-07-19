<?php
class Plugin_Loader{
	public $dir;
	
	public function __construct($input_dir = './application/plugins/plugs')
	{
		require_once 'plug_interface.php';
		$this->dir = $input_dir;		
	}
	
	public function init_all_plugins($position=false)
	{
		$content = "";
		$array = array();
		
		if ($handle = opendir($this->dir)) {
			while (false !== ($file = readdir($handle))) { 
				if ($file != "." && $file != "..") {
					if ($position == false) { array_push($array, $content . $this->init_plugin($this->dir, $file)); }
					else {array_push($array, $this->init_plugin($this->dir, $file));}
				}
			}
			closedir($handle); 
		}
		return $array;
	}

	public function init_plugin($dir, $file)
	{
		$patch = $dir . '/' . $file;
		$plugin_name = $this->extractFileName($file);
			
		require($patch);
		$plugin_class =  new ReflectionClass($plugin_name);
		
		$interfaces = ($plugin_class->getInterfaceNames());
		$isVaible = false;
		foreach($interfaces  as $interface)
		{ 
		   if($interface == 'Pluging_Interface'){ $isVaible = true;}
		}
		
		if($isVaible == true){
			$func1 = $plugin_class->getMethod('get_position'); 
			$plugPosition = $func1->invoke(null);
			$func1 = $plugin_class->getMethod('get_content'); 
			$plugContent = $func1->invoke(null);
			return array($plugPosition, $plugContent);
		}
	}

	function extractFileName($filename) {
		$p = strrpos($filename, '.');
		if ($p > 0) return substr($filename, 0, $p);
		else return $filename;
	}

}
?> 