		
<?php 
	use Models\Personalizado;

	$personalizado = new Personalizado();
	$servidores = $personalizado->returnServidores();
	$servicios = $personalizado->returnServicios();

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>iDBoard Bienvenido | eys Soluciones Empresariales IT</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo URL; ?>views/template/css/main.css">
		<link rel="stylesheet" href="<?php echo URL; ?>views/template/css/font-awesome.min.css">
		<!-- jQuery library -->
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row" style="border:1px solid black;">
				<div class="col-lg-6 col-lg-offset-3 text-center" style="margin-top:2px;">
					<div class="form-inline">
					  	<select class="form-control" id="sel1">
						    <?php 
						    foreach($servidores as $server) {
						    	echo '<option value="'.$server["Id"].'" name="'.$server["Nombre"].'">'.$server["Nombre"].'</option>';	
						    }
						    ?>		    
						</select>
						<select class="form-control" id="sel2">
						    <?php 
						    foreach($servicios as $service) {
						    	echo '<option value="'.$service["Id"].'" name="'.$service["Servicio"].'">'.$service["Servicio"].'</option>';	
						    }
						    ?>
						</select>
					</div>
				</div>
			</div>

			<div class="row" style="border:1px solid black;">
			CONTENIDO
			</div>
		</div>	
	</body>
</html>

		