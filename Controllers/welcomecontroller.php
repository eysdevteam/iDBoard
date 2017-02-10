<?php namespace Controllers;

	class welcomecontroller {
		private $Usuario;
		private $Pass;

		public function __construct() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				header("location: http://localhost/iDBoard/dashboard");
			}
			
		}

		public function index() {
			
		}


	}