<?php

include '/home/hwwpv3.ru/www/application/plugins/plug_loader.php';
include '/home/hwwpv3.ru/www/application/plugins/factory_method.php';

class Controller_Plugins extends Controller
{

	
	function action_index()
	{
		$leftPlug = array(); $rightPlug = array();
	
		$plugs = new Plugin_Loader;
		$plug=$plugs->init_all_plugins(true);
		foreach($plug as $value) {
			if ($value[0]=="Center-Left") {array_push($leftPlug, $value[1]);}
			if ($value[0]=="Center-Right") {array_push($rightPlug, $value[1]);}
		}
		$data = array();
		$oneOfTheData = array($leftPlug, 'leftPlugs');
		$oneMoreOneOfTheData = array($rightPlug, 'rightPlugs');
		array_push($data, $oneOfTheData);
		array_push($data, $oneMoreOneOfTheData);
		$fdata = $this->factory();
		$factoryData = array($fdata, 'factoryPlugis');
		array_push($data, $factoryData);
		$this->view->generate('plugins.tpl', $data);
	}
	
	
	{$HOOK_LEFT}
	
	function factory() {
		$creators = array( new PluginCreatorOne(), new PluginCreatorTwo() );
		for($i = 0; $i < count($creators); $i++){
			$creators[$i]=$creators[$i]->FactoryMethod()->get_content();
		}
		return $creators;
	}
}
?>