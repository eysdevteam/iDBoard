<?php namespace Models;

	use config\Conexion;

	class Dashboard {
		private $con;
		public $datos;
				
		public function __construct() {
			$this->con = new Conexion();
									
		}

		public function datosCliente() {

			$Id_usuarios = $_SESSION["Id"];

			$sql = "SELECT DISTINCT servidores.Id as Id_servidores, servidores.Nombre as Nombre_servidores, servicios.Id as Id_servicios, servicios.Servicio as Servicio_servicios, usuarios.Id as Id_usuarios, usuarios.Nombre as Nombre_usuarios from servidor_servicio INNER JOIN servidores on servidores.Id = servidor_servicio.Id_servidores INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id INNER JOIN usuarios on usuarios.Id = $Id_usuarios and usuarios.Id = servidor_servicio.Id_usuarios";

			$result = $this->con->consultaRetorno($sql);
			$this->datos = $result;

			return $result;			
			
		}

		public function dashBoardSupIzq() {


			$server1 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '1' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$server2 = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '2' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '2' ORDER by servidor_servicio.Id DESC LIMIT 0,1";

			$result = $this->con->consultasDashboardDoblesSingle($server1, $server2);
			
			return $result;
		}
		
		
		public function dashboardInfMedio() {

			$id_server = $this->datos[0]['Id_servidores'];
			$id_service = $this->datos[0]['Id_servidores'];

			$sql = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '$id_server' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '$id_service'";

			$result = $this->con->consultaRetorno($sql);

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

		public function returnServidores() {
			$server = "SELECT * From servidores";
			$result	= $this->con->consultaRetorno($server);
			return $result;
		}

		public function returnServicios() {
			$service = "SELECT * From servicios";
			$result	= $this->con->consultaRetorno($service);
			return $result;
		}

		public function graph() {
			$servidorId = $_GET["server"];
			$servicioId = $_GET["service"];

			$sql = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '$servidorId' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '$servicioId' ";

			$result	= $this->con->consultaRetorno($sql); 
			return $result;
			
		}

			
	}