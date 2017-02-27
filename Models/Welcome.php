<?php namespace Models;

	use config\Conexion;

	class Welcome {
		private $con;
		public $user;
		private $pass;

		public function __construct() {
			$this->con = new Conexion();			
		}

		private function login() {
			
			if(!empty(isset($_POST))) {
								
				$this->user = $_POST["username"];
				$this->pass = $_POST["password"];
				
				$sql = "call sp_login('$this->user','$this->pass')";


				
				$query = $this->con->consultaProtegida($sql);
				

				if ($this->con->datos->rowCount() > 0 ) {
					session_start();
					$resultado = $this->con->datos->fetch(\PDO::FETCH_ASSOC);
					print_r($resultado);
			
					$usuario = $resultado["Nombre"];
					$Id_roles = $resultado["Id_roles"];
					
					if( $Id_roles === 1) {
						$_SESSION['Nombre'] = $usuario;					
						//header("location: http://localhost/iDBoard/dashboard");					
					}					
					else {
						$_SESSION['Nombre'] = $usuario;					
						//header("location: http://localhost/iDBoard/dashboard");
					}
				}
				else {
					
					header("location: http://localhost/iDBoard/");

				}		

			}	
						
		}

		public function loginReturn() {
			self::login();
		}
	}

