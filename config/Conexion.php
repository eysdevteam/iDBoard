<?php namespace config;

	// 	Clase conexión
	class Conexion {
		//	método que permite conectar

		private $con;
		private $datos;

		public function __construct() {
			try{
            	//	Instanciando una nueva conexión PDO
                $this->con = new \PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);

                echo "me he conectado";

            //	Retornando la conexión    
            }catch(PDOException $ex){
                //die($ex->getMessage()); 
            }      
        }
		
        public function consultaSimple($sql) {
        	$this->con->exec($sql);
       	}

        public function consultaRetorno($sql) {
        	$this->datos = $this->con->exec($sql);
        	return $this->datos;
        }
   	}

   	