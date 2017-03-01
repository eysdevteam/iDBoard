<?php namespace Models;

	use config\Conexion;

	class Dashboard {
		private $con;
		
		public function __construct() {
			$this->con = new Conexion();
									
		}

		public function datosCliente() {

			$Id_usuarios = $_SESSION["Id"];

			$sql = "SELECT usuarios.Id as Id_usuarios, usuarios.Nombre as Nombre_usuario, servidores.Id as Id_servidores, servidores.Nombre as Nombre_servidores from usuario_servidor INNER JOIN servidores on usuario_servidor.Id_servidores = servidores.Id INNER JOIN usuarios on usuario_servidor.Id_usuarios = usuarios.Id and usuarios.Id = $Id_usuarios";

			$result = $this->con->consultaRetorno($sql);

			
			echo "</br>";
			return $result;

		}

		public function dashBoardSupIzq() {


			$server1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$server2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$result = $this->con->consultasDashboardDoblesSingle($server1, $server2);
			
			return $result;
		}

		public function dashboardInfIzq() {
			$server1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '4' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$server2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '4' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$result = $this->con->consultasDashboardDoblesSingle($server1, $server2);
			return $result;
		}

		public function dashBoardSupDe() {
			$service1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '5' ORDER by servidor_servicio.Tiempo ASC";

			$service2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '6' ORDER by servidor_servicio.Tiempo ASC";

			$result = $this->con->consultasDashboardDoblesMultiples($service1, $service2);
			return $result;

		}

		public function dashboardInfDe() {
			$service1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '5' ORDER by servidor_servicio.Tiempo ASC";

			$service2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '6' ORDER by servidor_servicio.Tiempo ASC";

			$result = $this->con->consultasDashboardDoblesMultiples($service1, $service2);
			return $result;

		}

			
	}