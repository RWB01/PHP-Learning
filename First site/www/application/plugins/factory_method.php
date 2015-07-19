<?php
	interface Plugin_Factory {
		public function FactoryMethod();
	}
	
	class PluginCreatorOne implements Plugin_Factory {
		public function FactoryMethod() {
			return new Plugin1(); 
		}
	}
	
	class PluginCreatorTwo implements Plugin_Factory {
		public function FactoryMethod() {
			return new Plugin2(); 
		}
	}
?>