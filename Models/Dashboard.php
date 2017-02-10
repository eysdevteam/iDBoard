<?php namespace Models;

	use config\Conexion;
	class Dashboard {
		private $con;
		public $user;
		private $pass;

		public function __construct() {
			$this->con = new Conexion();			
		}

		private function login() {
			
			if(!empty(isset($_POST))) {
				echo "si hay post";
				
				$this->user = $_POST["username"];
				$this->pass = $_POST["password"];
				
				$sql = "call sp_login('$this->user','$this->pass')";
				
				$query = $this->con->consultaProtegida($sql);
				

				if ($this->con->datos->rowCount() > 0 ) {
					
					session_start();
					$resultado = $this->con->datos->fetchAll();
					$usuario = $resultado[0]["Nombre"];					
					$_SESSION['Nombre'] = $usuario;					
					header("location: http://localhost/iDBoard/dashboard");
					
				}
				else {
					
					header("location: http://localhost/iDBoard/");

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