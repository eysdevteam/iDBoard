<?php namespace config;

	class Request {
		private $controlador;
		private $metodo;
		private $argumento;

		public function __construct() {
			if(isset($_GET['url'])) {
				$ruta = filter_input(INPUT_GET,"url", FILTER_SANITIZE_URL);
				$ruta = explode("/",$ruta);
				$ruta = array_filter($ruta);
				print_r ($ruta);

				if($ruta[0] == "index.php") {
					$this->controlador = "welcome";
				}
				else {
					$this->controlador = strtolower(array_shift($ruta));
				}				
				$this->metodo = strtolower(array_shift($ruta));
				if(!$this->metodo) {
					$this->metodo = "index";
				}
				$this->argumento = $ruta;
				
			}
		}

		public function obtenerControlador() {
			return $this->controlador;
		}
		public function obtenerMetodo() {
			return $this->metodo;
		}
		public function obtenerArgumento() {
			return $this->argumento;
		}
	} 