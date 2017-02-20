<?php namespace Controllers;

	use Models\Dashboard;
		
	class dashboardcontroller {
		private $dashboard;
		public $num;
		
		public function __construct() {
			$this->dashboard = new Dashboard();	
		}
		
		public function index() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				include "views/Template.php";
			}
			else {
				header("location: http://localhost/iDBoard/");
			}

			//$this->dashboard->dashBoardSupIzq();
		}

		public function ingresar() {
			$this->dashboard->loginReturn();
		}

		public function salir() {
			session_start();
			
				unset($_SESSION["Nombre"]);
				header("location: http://localhost/iDBoard/");
			
		}


	}

	