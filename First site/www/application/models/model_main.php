<?php

	interface greetingStrategy {
		function greeting();
	}
	
	class newYearGreeting implements greetingStrategy{
		function greeting() {
			return "HAPY NEW YEAR!";
		}
	}
	
	class notNewYearGreeting implements greetingStrategy{
		function greeting() {
			return "WELCOME!";
		}
	}
	
	class Context {
		private $nameOfStrategy;
		function __construct(greetingStrategy $strategy ) {
			$this->nameOfStrategy=$strategy;
		}
		
		function execute() {
			$greeting = $this->nameOfStrategy->greeting();
			return $greeting;
		}
	}

?>