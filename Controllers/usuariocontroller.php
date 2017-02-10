<?php namespace Controllers;
	use Models\Usuario as Usuario;

	class usuariocontroller {

		public function __construct() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				include "views/Template.php";
			}
			else {
				header("location: http://localhost/iDBoard/");
			}
					

		}

		public function index() {
			
			
		}
	}