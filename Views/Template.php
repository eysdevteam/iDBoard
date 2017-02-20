<?php namespace template;

	$template = new Template();

	class Template {

		public function __construct() {
		
		?>
		<!DOCTYPE html>
		<html lang="es-co">
		<head>
			<meta charset="UTF-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>iDBoard | eys Soluciones Empresariales IT</title>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/main.css">

			<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/font-awesome.min.css">					
			
			<!-- jQuery library -->
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			
		</head>
		<body>
					
			<nav class="navbar navbar-inverse" >
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="http://www.eys.co"><img src="<?php echo URL; ?>/Views/template/img/EyS_0.png" alt="eys Soluciones Empresariales IT" style="width:150px; height: 30px;"></a>
			    </div>
			    
			    <ul class="nav navbar-nav navbar-right">
			      <li ><a href="#" style="color:rgb(164,184,54);"><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION["Nombre"]?></a></li>
			      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:rgb(164,184,54);"><span class="glyphicon glyphicon-align-justify"></span></a>
			      	<ul class="dropdown-menu">
			          <li><a href="#" style="color:rgb(164,184,54);">Perfil</a></li>
			          <li><a href="<?php echo URL; ?>personalizado" style="color:rgb(164,184,54);">Personalizado</a></li>
			          <li><a href="<?php echo URL; ?>dashboard" style="color:rgb(164,184,54);">Dashboard</a></li>
			          <li><a href="<?php echo URL; ?>dashboard/salir" style="color:rgb(164,184,54);">Cerrar Sesión</a></li>
			        </ul>
			      </li>
			     
			    </ul>
			  </div>
			</nav>
			
		</body>
		</html>

		<?php 		
		}
		
	}