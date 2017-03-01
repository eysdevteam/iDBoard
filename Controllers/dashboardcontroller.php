<?php namespace Controllers;

	use Models\Dashboard;
		
	class dashboardcontroller {
		private $dashboard;
				
		public function __construct() {
			

			session_start();
			if (isset($_SESSION['Nombre'])) {
				if ($_SESSION['Roles'] == "Cliente") {
					include "views/Template.php";
					$this->dashboard = new Dashboard();
				}
				else {									
					header("location: http://localhost/iDBoard/paneladmin");
				}
				
			}
			
			else {
				header("location: http://localhost/iDBoard");
								
			}
					
		}
		
		public function index() {
			/*session_start();
			if (isset($_SESSION['Nombre'])) {
				include "views/Template.php";
			}
			else {
				header("location: http://localhost/iDBoard/");
			}*/		
		}
	}

	