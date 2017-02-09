<?php namespace config;
	
	class Enrutador {
		public static function run(Request $request) {
			$controlador = $request->obtenerControlador()."controller";
			$ruta = RUTA_BASE. "Controllers/". $controlador.".php";
			$metodo = $request->obtenerMetodo();
			$argumento = $request->obtenerArgumento();
			if(is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\".$controlador;
				$controlador = new $mostrar;
				if(!isset($metodo)) {
					call_user_func(array($controlador, $metodo));
				}
				else {
					call_user_func_array(array($controlador, $metodo), $argumento);
				}
			}

		}
	} 
	