<?php namespace Controllers;

	use Models\Welcome;

	class welcomecontroller {
		private $welcome;	
		private $con;
		
		public function __construct() {
			$this->welcome = new Welcome();
			
								
		}

		public function index() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				header("location: http://localhost/iDBoard/dashboard");
			}
			
		}

		public function ingresar() {
			$this->welcome->loginReturn();
		}

		public function salir() {
			
			session_start();				
			unset($_SESSION["Nombre"]);
			header("location: http://localhost/iDBoard/");
			
		}
	}