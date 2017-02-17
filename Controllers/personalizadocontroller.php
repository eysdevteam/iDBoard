<?php namespace Controllers;
	class personalizadocontroller {
		public function index() {
			session_start();
			if (isset($_SESSION['Nombre'])) {
				include "views/Template.php";
			}
			else {
				header("location: http://localhost/iDBoard/");
			}
		}
	}