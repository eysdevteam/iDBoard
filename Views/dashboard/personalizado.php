<?php 
	use Models\Dashboard;

	$personalizado = new Dashboard();
	$servicios = $personalizado->returnServicios();	

	$datos = $personalizado->datosCliente();

	foreach ($datos as $key => $value) {
		$servers[] = $value["Nombre_servidores"];
		$id_servers[] = $value["Id_servidores"];
	}

	$servers = array_unique($servers);
	$id_servers = array_unique($id_servers);
	$servidores = array_combine($id_servers, $servers);

	print_r ($_GET);
	
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	
		<meta charset="UTF-8">
		<title>Personalizado | eys Soluciones Empresariales IT</title>	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	
		<!-- <scritp type="text/javascript" src="<?php //echo URL; ?>Views/template/js/change.js"> -->
		<script type="text/javascript">
			function creaObjetoAjax () { //Mayoría de navegadores
     			var obj;
     			if (window.XMLHttpRequest) {
       				obj=new XMLHttpRequest();
        		}
     			else { //para IE 5 y IE 6
       				obj=new ActiveXObject(Microsoft.XMLHTTP);
        		}
     			return obj;
     		}

			$(document).ready(function(){
				$("#server").change(function () {
					$("#server option:selected").each(function () {
            		id_category = $(this).val();
            		alert(id_category);
            		ajax = new creaObjetoAjax();
            		ajax.open("GET", "dashboard/personalizado?Id_servidores="+id_category, true);
            		ajax.send();
            		});
				});
			});


		</script>


	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 text-center" style="margin-top:2px;">
					<div class="form-inline">
						<form action="<?php echo URL; ?>dashboard/personalizado" method="GET" role="form" style="display: block;">
<<<<<<< HEAD
						  	<select class="form-control" name="server" onchange="this.form.submit()">
=======
						  	<select class="form-control" name="server" id="server">
						  		<option>selecciona un servidor</option>
>>>>>>> origin/master
							    <?php
							    	foreach($servidores as $key=>$server) {
									    echo '<option id="'.$key.'" value="'.$key.'" >'.$server.'</option>';	
									}								    
							    ?>		    
							</select>
							<!--
							<select class="form-control" name="service" id="service">
							    <?php 
							    //foreach($servicios as $service) {
							    //	echo '<option id="'.$service["Id"].'" value="'.$service["Id"].'" >'.$service["Servicio"].'</option>';	
							    //}
							    ?>
							</select>
							
							<input type="submit" class="btn btn-default" value="Enviar" style="background-color:#DFF2BF; color:black; font-weight: bold;" name="submit"></input>
							-->

						</form>

					</div>
				</div>
			</div>

			
			<?php 
				/*
				if(isset($_GET["submit"])) {
					echo '<div id="draw-graphs" class="row" style="border:1px solid grey; height: 500px; margin-top:3px;">';
					$grafica = $personalizado->graph();
					foreach($grafica as $item) {
						$servidor[] = $item["Nombre"];
						$valor[] = $item["Valor"];
						$tiempo[] = $item["Tiempo"];
					}
				}
				else {
					echo '<div id="draw-graphs" class="row" style="border:1px solid grey; height: 500px; margin-top:3px; text-align:center; font-weight:bold; font-size:2em;"><i class="glyphicon glyphicon-warning-sign" style="margin-top:250px;">Envíe</i></div>';
				}
				*/
			?>
			
		</div>
		<!--
		<script type="text/javascript">	
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(draw);

			function draw() {

      			var data = new google.visualization.DataTable();
      			var data = google.visualization.arrayToDataTable([
			        ['Fecha','<?php //echo $servidor[0] ?>'],
                	['<?php //echo $tiempo[0] ?>',<?php //echo $valor[0] ?>],
                	['<?php //echo $tiempo[1] ?>',<?php //echo $valor[1] ?>],
                	['<?php //echo $tiempo[2] ?>',<?php //echo $valor[2] ?>],
                	
                ]);

      			var options = {
      				hAxis: {
          				title: 'Fecha y Hora'                    
       				},
       				vAxis: {
       					title: 'Valor'
       				},
        
        		
      			};

      			var chart = new google.visualization.ColumnChart(
        		document.getElementById('draw-graphs'));
        		chart.draw(data, options);
    		}
        </script>
        -->
	</body>
</html>