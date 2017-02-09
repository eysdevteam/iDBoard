<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("RUTA_BASE", dirname(realpath(__FILE__)).DS);
	
	include "library/core.php";
	
	use config\Request;
	use config\Enrutador;
	config\Autoload::run();	
	Enrutador::run(new Request());	
	
	
	
	
	


	