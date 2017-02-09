<?php namespace config;
	
	class Enrutador {
		public static function run(Request $request) {
			$controlador = $request->obtenerControlador()."controller";			
			
			$ruta = RUTA_BASE. "Controllers".DS. $controlador.".php";
			
			$metodo = $request->obtenerMetodo();
			
			$argumento = $request->obtenerArgumento();
			if(is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\".$controlador;
				$controlador = new $mostrar;
				if(!isset($argumento)) {
					call_user_func(array($controlador, $metodo));
				}
				else {
					call_user_func_array(array($controlador, $metodo), $argumento);
					}
			}
			else {
				echo "la ruta no existe";
			}	

			//	Cargar vistas.
			$ruta = RUTA_BASE."views".DS.$request->obtenerControlador().DS.$request->obtenerMetodo().".php";
			
			if(is_readable($ruta)) {
				require_once $ruta;
			}
			else {
				echo "No se encuentra la ruta";
			}

		}
	} 
	