<?php
	
	//	Define una separador de directorios.
	define("DS", DIRECTORY_SEPARATOR);
	//	Define la ruta base del software.
	define("RUTA_BASE", dirname(realpath(__FILE__)).DS);
	//	Define como URL principal de acceso.
	define("URL", "http://localhost/iDBoard/");
	
	//	Incluye un archivo de núcleo.
	include "library/core.php";
	
	//	Uso de la clase Request, quien recoge las rutas por medio de HTTP REQUEST.
	use config\Request;
	//	Uso de la clase Enrutador, se encarga de hacer rutas amigables.
	use config\Enrutador;
	//	Uso de la clase Autoload, se encarga de incluir dinámicamente algunos ficheros.
	config\Autoload::run();
	//	Instancia de la clase Enrutador recibiendo como parámetro una nueva instancia de la clase Request.
	Enrutador::run(new Request());

	

	
	
	
	
	
	
	


	