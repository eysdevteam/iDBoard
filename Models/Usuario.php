<?php namespace Models;
	
	use config\Conexion as Conexion;
	class Usuario {

		private $Id;	
		private $Nombre;
		private $Usuario;
		private $Pass;
		private $Estado;
		private $Privilegio;
		private $con;

		/**
		 * Class Constructor
		 * @param    $Id   
		 * @param    $Nombre   
		 * @param    $Usuario   
		 * @param    $Pass   
		 * @param    $Estado   
		 * @param    $Privilegio   
		 */
		/*public function __construct($Id, $Nombre, $Usuario, $Pass, $Estado, $Privilegio)
		{
			$this->Id = $Id;
			$this->Nombre = $Nombre;
			$this->Usuario = $Usuario;
			$this->Pass = $Pass;
			$this->Estado = $Estado;
			$this->Privilegio = $Privilegio;
		}
	
		*/

		public function __construct() {
			$this->con = new Conexion();			
		}

		public function verInfo() {
			
		}



	}