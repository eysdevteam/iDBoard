<?php namespace Models;
	use config\Conexion;
	class Dashboard {
		private $con;
		private $estado = false;

		public function __construct() {
			$this->con = new Conexion();			
		}

		private function login() {
			
			if(!empty(isset($_POST))) {
				echo "si hay post";
				
				$user = $_POST["username"];
				$pass = $_POST["password"];
				
				$sql = "call sp_login('$user','$pass')";
				
				$query = $this->con->consultaProtegida($sql);

				if ($this->con->datos->rowCount() > 0 ) {
				
					$this->estado = true;
					echo "pasó";
				}
				else {
					$this->estado = false;
					echo "no pasó";
				}				

			}	
			else {
				echo "no hay post";
			}


		}

		public function loginReturn() {
			self::login();
		}

	}