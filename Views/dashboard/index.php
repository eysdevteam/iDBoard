<?php 
	use Models\Dashboard;
	
	$dashboard = new Dashboard();
	$cliente = $dashboard->datosCliente();
	$result = $dashboard->dashBoardSupIzq();
	$result2 = $dashboard->dashboardInfIzq();
	$result3 = $dashboard->dashboardSupDe();
	$result4 = $dashboard->dashboardInfDe();	
	$result5 = $dashboard->dashboardInfMedio();

	foreach($result as $key=>$value) {
		$servidores[] = $value["Nombre"];
		$valores[] = $value["Valor"];
	}
	foreach($result2 as $key2=>$value2) {
		$servidores2[] = $value2["Nombre"];
		$valores2[] = $value2["Valor"];
	}

	foreach($result5 as $value5) {
		
		$servidor5[] = $value5["Nombre"];
		$valor5[] = $value5["Valor"];
		$tiempo5[] = $value5["Tiempo"];	
		
	}	
	
	foreach($result3 as $item) {
		foreach ($item as $key3 => $value3) {
			$servidores3[] = $value3["Nombre"];
			$valores3[] = $value3["Valor"];
			$servicios3[] = $value3["Servicio"];
			$tiempo3[] = $value3["Tiempo"];
		}
	}

	foreach($result4 as $item) {
		foreach ($item as $key4 => $value4) {
			$servidores4[] = $value4["Nombre"];
			$valores4[] = $value4["Valor"];
			$servicios4[] = $value4["Servicio"];
			$tiempo4[] = $value4["Tiempo"];
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | eys Soluciones Empresariales IT</title>
	
	<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>

</head>
<body style = "overflow: hidden">
		<div class="row">
		   	<div class="col-lg-6">
		     	<div class="panel panel-default zoomTarget" data-targetsize="1.00" data-duration="600">
		        	<div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		            	<div id="contenido" style="height: 250px; width: 100%;"></div>
		        	</div>
		        </div>
		    </div>
		    <div class="col-lg-6">
		        <div class="panel panel-default zoomTarget" data-targetsize="1.00" data-duration="600">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido2" style="height: 250px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>		    
		</div>		  

		<div class="row">
		   	<div class="col-lg-4">
		     	<div class="panel panel-default zoomTarget" data-targetsize="1.00" data-duration="600">
		        	<div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		            	<div id="contenido3" style="height: 200px; width: 100%;"></div>
		        	</div>
		        </div>
		    </div>
		    <div class="col-lg-4">
		        <div class="panel panel-default zoomTarget" data-targetsize="1.00" data-duration="600">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido4" style="height: 200px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-lg-4">
		        <div class="panel panel-default zoomTarget" data-targetsize="1.00" data-duration="600">
		            <div class="panel-heading">
		                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
		            </div>
		        	<div class="panel-body">
		    			<div id="contenido5" style="height: 200px; width: 100%;"></div>
		    		</div>
		    	</div>
		    </div>
		</div>		  

		<!-- <script type="text/javascript" src="<?php //echo URL; ?>library/line.js"></script> -->
		
		<script type="text/javascript">
			google.charts.load('current', {packages: ['corechart', 'line']});
			google.charts.setOnLoadCallback(drawBasic);
			google.charts.setOnLoadCallback(drawInfDe);
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawSupIzq);
			google.charts.setOnLoadCallback(drawSupDe);
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(draw);

			function drawBasic() {    
			      
			      var data = google.visualization.arrayToDataTable([
			          ['Fecha', '<?php echo $servicios3[0]; ?>', '<?php echo $servicios3[3]; ?>'],
			          ['<?php echo $tiempo3[0]; ?>',  <?php echo $valores3[0]; ?>,      <?php echo $valores3[3]; ?>],
			          ['<?php echo $tiempo3[1]; ?>',  <?php echo $valores3[1]; ?>,      <?php echo $valores3[4]; ?>],
			          ['<?php echo $tiempo3[2]; ?>',  <?php echo $valores3[2]; ?>,      <?php echo $valores3[5]; ?>],
			          
			        ]);

			      var options = {
			        hAxis: {
			          title: 'Time'
			        },
			        vAxis: {
			          title: 'Popularity'
			        }

			      };

			      var chart = new google.visualization.LineChart(document.getElementById('contenido2'));

			      chart.draw(data, options);
			    }   

			function drawInfDe() {    
			      
			    var data = google.visualization.arrayToDataTable([
			        ['Fecha', '<?php echo $servicios4[0]; ?>', '<?php echo $servicios4[3]; ?>'],
			        ['<?php echo $tiempo4[0]; ?>',  <?php echo $valores4[0]; ?>,      <?php echo $valores4[3]; ?>],
			        ['<?php echo $tiempo4[1]; ?>',  <?php echo $valores4[1]; ?>,      <?php echo $valores4[4]; ?>],
			        ['<?php echo $tiempo4[2]; ?>',  <?php echo $valores4[2]; ?>,      <?php echo $valores4[5]; ?>],
			          
			    ]);

			    var options = {
			      hAxis: {
			        title: 'Time'
			      },
			      vAxis: {
			        title: 'Popularity'
			      }
 	            };

			    var chart = new google.visualization.LineChart(document.getElementById('contenido5'));

			    chart.draw(data, options);
			} 

			function drawSupDe() {
			      var data = google.visualization.arrayToDataTable([
			        ['Servidores', '<?php echo $value["Servicio"]; ?>', { role: 'style' }],
			        ['<?php echo $servidores[0]; ?>', <?php echo $valores[0]; ?>, 'blue'],
			        ['<?php echo $servidores[1]; ?>', <?php echo $valores[1]; ?>, 'blue']			        
			      ]);

			      var options = {        
			        hAxis: {
			          title: '<?php echo $value["Servicio"]; ?>',          
			          minValue: 0
			        },
			        vAxis: {

			        }
			        
			      };
			      var chart = new google.visualization.BarChart(document.getElementById('contenido3'));
			      chart.draw(data, options);
			   	}

			function drawSupIzq() {
			      var data = google.visualization.arrayToDataTable([
			        ['Servidores', '<?php echo $value2["Servicio"]; ?>', { role: 'style' }],
			        ['<?php echo $servidores2[0]; ?>', <?php echo $valores2[0]; ?>, 'blue'],
			        ['<?php echo $servidores2[1]; ?>', <?php echo $valores2[1]; ?>, 'blue']			        
			      ]);

			      var options = {        
			        hAxis: {
			          title: '<?php echo $value2["Servicio"]; ?>',          
			          minValue: 0
			        },
			        vAxis: {

			        }
			        
			      };
			      var chart = new google.visualization.BarChart(document.getElementById('contenido'));
			      chart.draw(data, options);
			    } 
						
			function draw() {

      			var data = new google.visualization.DataTable();
      			var data = google.visualization.arrayToDataTable([
			        ['Fecha','<?php echo $servidor5[0] ?>'],
                	['<?php echo $tiempo5[0] ?>',<?php echo $valor5[0] ?>],
                	['<?php echo $tiempo5[1] ?>',<?php echo $valor5[1] ?>],
                	['<?php echo $tiempo5[2] ?>',<?php echo $valor5[2] ?>],
                	
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
        		document.getElementById('contenido4'));
        		chart.draw(data, options);
    		}
	    </script>   

	
</body>
</html>