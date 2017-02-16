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
						
		}

		public function loginReturn() {
			self::login();
		}

		public function dashBoardSupIzq() {
			$server1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$server2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$result = $this->con->consultasDashboardDobles($server1, $server2);
			
			return $result;
		}

		public function dashboardSupDe() {
			$server1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '4' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$server2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '4' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$result = $this->con->consultasDashboardDobles($server1, $server2);
			return $result;
		}

			
	}