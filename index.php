<?php
	define("RUTA_BASE", dirname(realpath(__FILE__))."/");
	include "library/core.php";
	
	use config\Request;
	use config\Enrutador;
	config\Autoload::run();	
	Enrutador::run(new Request());	
	
	
	
	
	


	