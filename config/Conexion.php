<?php namespace config;

	// 	Clase conexión
	class Conexion {
		//	método que permite conectar

		private $con;
		public $datos;

		public function __construct() {
			try{
            	//	Instanciando una nueva conexión PDO
                $this->con = new \PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);

                $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                //echo "me he conectado";
            //	Retornando la conexión    
            }catch(PDOException $ex){
                //die($ex->getMessage()); 
            }      
        }
		
        public function consultaProtegida($sql) {
            
            try{
                echo "entré al try";
                $query = $this->con->prepare($sql);
                $query->execute();
                return $this->datos = $query;
            }catch(PDOException $e) {
                echo "Error: ".$e->getMessage();
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

   	