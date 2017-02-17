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
	}