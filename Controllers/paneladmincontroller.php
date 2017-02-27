<?php namespace Controllers
	class paneladmincontroller {
		public function __construct() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				if ($_SESSION['Id_roles'] === 1) {
					include "views/Template.php";
				}
				else {
					echo "Error en el login";					
					session_start();				
					unset($_SESSION["Nombre"]);
					header("location: http://localhost/iDBoard/");
				}
				
			}
			else {
				header("location: http://localhost/iDBoard/");
			}
					

		}

		public function index() {
			
			
		}
	}