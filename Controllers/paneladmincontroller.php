<?php namespace Controllers;

	class paneladmincontroller {
		public function __construct() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				if ($_SESSION['Roles'] == "Administrador") {
					include "views/Template.php";
				}
				else {									
					header("location: http://localhost/iDBoard/dashboard");
				}
				
			}
			
			else {
				header("location: http://localhost/iDBoard");
								
			}
					

		}

		public function index() {
			
			
		}		

	}