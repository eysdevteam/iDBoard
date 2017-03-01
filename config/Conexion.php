<?php namespace config;

	// 	Clase conexión
	class Conexion {
		//	método que permite conectar

		private $con;
		public $datos;
        public $datosArray = array();

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
                $query = $this->con->prepare($sql);
                $query->execute();
                
                return $this->datos = $query;
                $query->closeCursor();
            }catch(PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }


        public function consultaRetorno($sql) {
            $query = $this->con->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            $query->closeCursor();        	
        	return $result;
        }

        public function consultasDashboardDoblesSingle($sql1=null, $sql2=null) {
            
            $query1 = $this->con->prepare($sql1);
            $query1->execute();
            $result = $query1->fetch(\PDO::FETCH_ASSOC);
            $query1->closeCursor();
            
            $query2 = $this->con->prepare($sql2);
            $query2->execute();
            $result2 = $query2->fetch(\PDO::FETCH_ASSOC);
            $query2->closeCursor();
                        
            $array = array($result, $result2);
            return $array;          
            
        }

        public function consultasDashboardDoblesMultiples($sql1=null, $sql2=null) {
            
            $query1 = $this->con->prepare($sql1);
            $query1->execute();
            $result = $query1->fetchAll(\PDO::FETCH_ASSOC);
            $query1->closeCursor();
            
            $query2 = $this->con->prepare($sql2);
            $query2->execute();
            $result2 = $query2->fetchAll(\PDO::FETCH_ASSOC);
            $query2->closeCursor();
                        
            $array = array($result, $result2);
            return $array;          
            
        }
   	}

   	