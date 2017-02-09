<?php namespace config;

	class Autoload {

		public static function run() {
			spl_autoload_register(function($class){
				$ruta = str_replace("\\", "/", $class) . ".php";
								
				if(is_readable($ruta)) {
					include $ruta;
				}
				else{
					echo "no se encuentra el directorio ".$ruta;
				}
				
								
			});
		}
	}

	
	 


	