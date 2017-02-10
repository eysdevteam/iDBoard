<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("RUTA_BASE", dirname(realpath(__FILE__)).DS);
	define("URL", "http://localhost/iDBoard/");
	
	include "library/core.php";
	
	use config\Request;
	use config\Enrutador;
	config\Autoload::run();	
	include "views/Template.php";
	Enrutador::run(new Request());
	
	
	
	
	
	
	


	