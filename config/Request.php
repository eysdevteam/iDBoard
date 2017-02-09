<?php namespace config;

	class Request {
		public $controlador;
		private $metodo;
		private $argumento;

		public function __construct() {
			if(isset($_GET['url'])) {
				$ruta = filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
				$ruta = explode("/",$ruta);
				$ruta = array_filter($ruta);
								
				$this->controlador = strtolower(array_shift($ruta));
							
				$this->metodo = strtolower(array_shift($ruta));
				if(!$this->metodo) {
					$this->metodo = "index";
				}
				$this->argumento = $ruta;
				print_r ($ruta);
				
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