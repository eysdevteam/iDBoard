<?php namespace config;

	//	Incluye automáticamente algunos archivos necesarios.
	class Autoload {

		//	Método estático run()
		public static function run() {
			//	Método propio de php, se le pasa como parámetro una función que a su vez recibe como parámetro una clase.
			spl_autoload_register(function($class){
				//	Modifica la ruta del archivo que recibe.
				$ruta = str_replace("\\", "/", $class) . ".php";
				
				// Si el archivo es leíble.				
				if(is_readable($ruta)) {
					//	Incluye la ruta.
					include $ruta;
				}
				else{
					//	Lanza un mensaje en caso contrario.
					echo "no se encuentra el directorio ".$ruta;
				}			
								
			});
		}
	}

	
	 


	