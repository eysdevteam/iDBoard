<?php namespace Models;

	use config\Conexion;

	class Personalizado {

		public function __construct() {
			$this->con = new Conexion();			
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
			$sql = "SELECT servidores.Id, servidores.Nombre, servicios.Servicio, servidor_servicio.Valor, servidor_servicio.Tiempo from servidor_servicio INNER JOIN servidores on servidor_servicio.Id_servidores = servidores.Id and servidores.Id = '$servidorId' INNER JOIN servicios on servidor_servicio.Id_servicios = servicios.Id and servicios.Id = '$servicioId'";
			$result	= $this->con->consultaRetorno($sql); 
			return $result;
			
		}
	}